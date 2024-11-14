
 <center>
 <!DOCTYPE html>
 <html lang="en">
 <head>
  <link rel="shortcut icon" href="./icons8-danger-50.png" type="image/x-icon">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SYSTEM OF REG</title>
 </head>
 <style>
   body{
    outline: none;
      background-color: rgba(255, 213, 213, 0.863);
   }
    fieldset{
    outline: none;
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);

        height: 24em;
        font-family:stencil;
        width: 12em;
        background-color: rgb(202, 46, 34);
        color: white;
        text-align: center;
        color: white;
        margin-left: 0em;
        border: 2px solid rgb(202, 46, 34);
        border-radius: 1EM;
    }
    .vb{
    outline: none;
    box-shadow: 0 16px 32px rgba(0, 0, 0, 0.2);

      height: 41em;
      color: black;
      background-color: white;
      /* border-radius: 1EM; */
      /* font-family:stencil; */
      width: 19.5em;
      border: 2px solid rgb(202, 46, 34);

    }
    input{
    outline: none;

      border-radius: 5px;
      border: none;
      height: 3em;
    }
    .po{
    outline: none;

      height: 4em;
      width: 19.6em;
      margin-top: -1.2em;
      background-color:  rgb(202, 46, 34);
    }
    .cv{
    outline: none;

      height: 7em;
       width:8em; 
       /* border:2px solid black;  */
       margin-left: 10em;  
       margin-top: -16.6em; 
    }
 </style>
 <body>
 <?php



if(isset($_POST['submit'])) {
   $text=$_POST['text'];
   $unit="$text"/240.1;
   $price="$text"-2;
  $name4=$_POST['name4'];
  $tex=$_POST['tex'];
  $power="$tex";
  $name="$name4";
$hh="FRW";
$h="FRW";
$date=date('Y-m-d h:i:sa');
switch($date){
    case date('Y-m-d h:i:sa'):
        
}
$g="Date";

}
   
   ?>
   <script src="sweetalert.min.js"></script>
<script>
  // function derry(){
  //   confirm('okey')
  // }
// function submitForm(form) {
//     swal({
//         title: "Are you sure to buying init",
//     text: "In buying electric energy our system click ok! if you write correctly",
//         icon: "warning",
//         buttons: true,
//         dangerMode: true,


//     })
//     .then((isOkay) =>{
//         if (isOkay) {
//             form.submit();;;
//         }
        
//     })
//     return false;
// }
</script>
<form  method="POST" onsubmit="return submitForm(this);">
  
    <h1 style="text-align: center; color: rgb(202, 46, 34); font-family:stencil;">SYSTEM OF PAYMENT ELECTRICAL ENERGY</h1>
<fieldset>
   <br> 
   <b>Enter Names:</b><input type="text" name="name4" value="" placeholder="Enter your name"  style="height: 2.5em; width:13em" required><br><BR>

    <b>Tel Number:</b><input type="text" name="numm" value="" style="height: 2.5em; width:13em" placeholder="Enter Tel phone number" required><br>
    <b>PIN:</b><input type="password" name="num" placeholder="Enter your PIN"  style="height: 2.5em; width:13em" required><br>
    <b>Enter Money:</b><input type="text" name="text" placeholder="Enter Money"  style="height: 2.5em; width:13em" required><br><BR>
    <b>CashPower Number:</b><input type="text" id="kashipower" name="tex" placeholder="Enter Cashpower Number"  style="height: 2.5em; width:13em" required><br><BR>

    <input type="submit" name="submit" value="SEND MONEY"  style="height: 2.8em; width:13em"><BR><br>
    </fieldset>
   
    </form>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
<br><br><br>
    <div class="vb">
      <div class="po">
      <h2 style="color: white; font-family:bell mt;">Recipt For Your Order 29543 Pyiment Confarmation</h2>
      </div>
      <h5>
         Thank you for buying Electrical energy in  our <br>campany your ordered detailes are below. plea<br>se! keep the receipt! for your record you can ol<br>so click our link download any tools if you hav<br>ent arleady.<a href="#">reg.com.rw.app</a>and write message
</h5>
   <?php
   $text = htmlspecialchars($_POST['text']);
   $num = htmlspecialchars($_POST['num']);
   $numm = htmlspecialchars($_POST['numm']);
   echo "<h4>You paiding money for it: $text $hh</h4>";
   echo "<h4>Buying Init: $unit K/W.</h4>";
   echo "<h4>ID CashPower:$power </h4>";
   echo "<h4>Total money for pay: $price $h.</h4>";
   echo "<h4>Time: $date $g.</h4>";

   ?>
   <h4>Ticket holder:Ingabire Nadia cacher.</h4>
   <?php
   echo "<h4>Custemer Name: $name</h4>";
   
   ?>
   <h4>Where:Gatsibo Dis, Ngarama Sector.</h4>
   <h4>Campan'ys Name:(REG) Energy.G.</h4>
   <h4>Note:
   It is forbidden to cut the paper <br>and not sell it sell them and they will <br>take you they lock you up legally is not</h4>


   <img src="./icons8-signature-48.png" alt="" style="height: 1.8em; width:6em; margin-left:0.8em;margin-top:-1em;">
   <br><b style="padding-left:0.8 em;">
   REG SGNATURE
   </b>
   <div  class="cv"><img src="./icons8-qr-code-80.png" alt="" style="height: 7em; width:10em;"></div>

   </div>
   <script>
        const input = document.getElementById('$kashi');

        input.addEventListener('input', () => {
            let value = input.value.replace(/[^0-9]/g, '');
            let formattedValue = '';
            for (let i = 0; i < value.length; i += 4) {
                if (formattedValue) formattedValue += '-';
                formattedValue += value.substr(i, 4);
            }

            input.value = formattedValue;
        });
    </script>
 </body>
 </html>
 </center>