var xmlHttp;

  function forum_reply(comment_id, course_id)
  { 
    console.log(comment_id);
  xmlHttp=GetXmlHttpObject();
  if (xmlHttp==null)
   {
   alert ("Browser does not support HTTP Request");
   return;
   }
  var url="forum_reply.php";
  url=url+"?comment_id="+comment_id+"&course_id="+course_id;

  var content = $("#content").val();
  console.log('dsddd');
  xmlHttp.onreadystatechange=stateChanged();
  xmlHttp.open("POST",url,true);
  xmlHttp.send(content);
  };

  function stateChanged() 
  { 
  if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
   { 
   document.getElementById("s-part1").innerHTML=xmlHttp.responseText;
   } 
  };

  function GetXmlHttpObject()
  {
  var xmlHttp=null;
  try
   {
   // Firefox, Opera 8.0+, Safari
   xmlHttp=new XMLHttpRequest();
   }
  catch (e)
   {
   //Internet Explorer
   try
    {
    xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
    }
   catch (e)
    {
    xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
    }
   }
  return xmlHttp;
  };
