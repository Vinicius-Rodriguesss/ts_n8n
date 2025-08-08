<%@ LANGUAGE="VBSCRIPT" CODEPAGE="65001" LCID="1046" %>
<% Response.Charset = "utf-8"
Response.ContentType = "text/javascript"

cliente_instagram = "shopjaraguaindaiatuba"

Dim instagram_raw
instagram_raw = application("instagram_site_cache2")
if instagram_raw = "" then
	set xmlhttp = server.CreateObject("Msxml2.ServerXMLHTTP.6.0") 'MSXML2.XMLHTTP.6.0")
	xmlhttp.setTimeouts 5000,5000,10000,10000
	xmlhttp.open "GET", "https://www.instagram.com/"& cliente_instagram &"/", false
	xmlhttp.send()
	instagram_raw = xmlhttp.responsetext
	application("instagram_site_cache2") = instagram_raw 
end if
instagram_raw = replace(instagram_raw," type=""text/javascript""","")
inst_scripts = split(instagram_raw,"script")
for i = 1 to ubound(inst_scripts)
	if InStr(inst_scripts(i),".jpg") and InStr(inst_scripts(i),"og:image") = 0 then
		json_data = trim(json_data)
		json_data = mid(inst_scripts(i),2,len(inst_scripts(i))-3)
		response.write  json_data & vbcrlf
	end if
next

%>
var insta_media = window._sharedData.entry_data.ProfilePage[0].graphql.user.edge_owner_to_timeline_media.edges;