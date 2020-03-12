<%
'Session.timeout = 500
set conn=Server.CreateObject("ADODB.Connection")
'conn.Provider="Microsoft.Jet.OLEDB.4.0"

'On Error Resume Next
'pathBancoAccess = "BD/Ramais.mdb"
'conn.Open Server.Mappath(pathBancoAccess)

'response.write Server.Mappath(pathBancoAccess)
Dim adoCon, strCon
Dim caminho_banco 

caminho_banco = Server.MapPath("BD/Ramais.mdb") 
conn.Open "Provider=Microsoft.ACE.OLEDB.12.0;Data Source=" & caminho_banco  

%>