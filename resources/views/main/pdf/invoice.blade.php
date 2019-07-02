<head>
<style>
table, td, tr {
    border: 1px solid #ddd;
    text-align: left;

}

table {
    border-collapse: collapse;
    width: 100%;
}

tr, td {
    padding: 15px;
}
p {
  border-top: 0.5px  solid black;
  width:200px;
}
</style>
</head>
<body>
        <h1 style="text-align: center;">Invoice</h1>
        <table>
             <tr>
               <td>Full Name:</td>
               <td>{{$client_fullname}}</td>
             </tr>
             <tr>
               <td>E-mail: </td>
               <td>{{$email}}</td>
             </tr>
             <tr>
               <td>City:</td>
               <td> {{$city}}</td>
             </tr>
             <tr>
               <td>Type:</td>
               <td>{{$id_type }}</td>
             </tr>
             <tr>
               <td>Details:</td>
               <td> {{$details}}</td>
             </tr>
             <tr>
               <td>Tel:</td>
               <td> {{$tel}}</td>
             </tr>
             <tr>
               <td>Sent: </td>
               <td>{{$created_at}}</td>
             </tr>

      </table>
      <br>
      <br>
      <br>
      <br>
      <br>
      <br>

       <p>Signature</p>
</body>
