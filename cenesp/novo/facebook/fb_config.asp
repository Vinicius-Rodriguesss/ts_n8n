<!-- SHARE FACEBOOK -->
<!-- 
    DADOS EXEMPLO:
    <a share_id="[ID-NOVIDADE]" share_fb="t1=[TITULO]&t2=[TEXTO]&i=[CAMINHO IMG]" share_img="[CAMINHO IMG]" ></a>
-->
<%
    Dim strProtocol
    Dim strDomain
    Dim facebook_url
    If lcase(Request.ServerVariables("HTTPS")) = "on" Then 
      strProtocol = "https" 
    Else
      strProtocol = "http" 
    End If
    strDomain= Request.ServerVariables("SERVER_NAME")
    facebook_url = strProtocol & "://" & strDomain & "/cenesp/facebook/index.php" 
    facebook_id="544828685885334"
%>
<script type="text/javascript">
  window.fbAsyncInit = function(){
           FB.init({
            appId      : '<%=facebook_id%>',
            xfbml      : true,
            version    : 'v2.12'
          }); 

          /*$('body').on('click','[share_fb]', function(event){
            event.preventDefault()
            load_pic= new Image();
            share_fb = $(this).attr('share_fb'); //DADOS EXEMPLO
            share_id = $(this).attr('share_id'); //novidade_id
            load_pic.onload = function() {
              img_w= this.width;
              img_h= this.height;
              facebook_url = '<%=facebook_url%>?v=1&app_id=<%=facebook_id%>&post_id='+share_id+'&img_w='+img_w+'&img_h='+img_h+'&'+share_fb;
               
              FB.ui({
                appId : '<%=facebook_id%>',
                method: 'feed', 
                mobile_iframe: true,
                href: facebook_url,
              }, function(response){});  

            };load_pic.src = $(this).attr('share_img');
          });FB.AppEvents.logPageView(); */

          monta_sharer =function(share_id, share_fb, img){  
            return '<%=facebook_url%>?v=1&app_id=<%=facebook_id%>&post_id='+share_id+'&'+share_fb;
          }; FB.AppEvents.logPageView();
      };

      (function(d, s, id){
           var js, fjs = d.getElementsByTagName(s)[0];
           if (d.getElementById(id)) {return;}
           js = d.createElement(s); js.id = id;
           js.src = "https://connect.facebook.net/en_US/sdk.js";
           fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
</script>