function GetTextFields()
{
  let username;
  if(!document.getElementById("blankCheckbox").checked)
  {
    username = document.getElementById("Username");
    username.disabled = true;
    username.value = "";
  }
  let comment = document.getElementById("Comment");
  SendToServer(username, comment);
  comment.value = "";
  username.value = "";
}

function SendToServer(username, comment)
{
  var mySQL = require('mysql');

  var con = mysql.createConnection(
  {
    host: "localhost",
    user: "yourusername",
    password: "yourpassword"
  });

  con.connect(function(err)
  {
    if (err) throw err;
    console.log("Connected!");
  });


}
