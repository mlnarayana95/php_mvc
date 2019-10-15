 @extends('layout')


@section('style')
<style>
    
            body{
      background: none;
      margin: 0px;
      -webkit-animation: fadein 2s; /* Safari, Chrome and Opera > 12.1 */
      -moz-animation: fadein 2s; /* Firefox < 16 */
      -ms-animation: fadein 2s; /* Internet Explorer */
      -o-animation: fadein 2s; /* Opera < 12.1 */
      animation: fadein 2s;
    } 
    
     @keyframes fadein {
        from { opacity: 0; }
        to   { opacity: 1; }
        }

      /* Firefox < 16 */
      @-moz-keyframes fadein {
          from { opacity: 0; }
          to   { opacity: 1; }
      }

      /* Safari, Chrome and Opera > 12.1 */
      @-webkit-keyframes fadein {
          from { opacity: 0; }
          to   { opacity: 1; }
      }

      /* Internet Explorer */
      @-ms-keyframes fadein {
          from { opacity: 0; }
          to   { opacity: 1; }
      }

      /* Opera < 12.1 */
      @-o-keyframes fadein {
          from { opacity: 0; }
          to   { opacity: 1; }
             }

      .btn{
        border-radius: 6px;
        background: #c32625;
        color: #fff;
        font-weight: bold;
        border: 1px solid #5f5353;
        width: 64px; 
       }
      
    
    #wrapper{
        width: 100%;
        margin: 0 auto; /* to centers the div */
      }
    
    table {
      border-collapse: collapse;
      border-spacing: 0;
      width: 100%;
      border: 1px solid #000;
      color: #000;
      font-family: Tahoma, sans-serif, sans-serif;
      box-shadow: 0px 3px 5px #000;
      padding: 1px;
      }
     
    td{
      font-weight: 400;
    }
     
     th{
       font-weight: 700;
     }

    h2{
      font-size: 30px;
      font-family: Tahoma, sans-serif;
      color: #000;
    }
     
    th, td {
      text-align: left;
      padding: 16px;
    }

    tr:nth-child(even) {
      background-color: #535353;
    }
     
     tr:nth-child(odd) {
      background-color: #fff;
    }
    
     a{
       color: #000;
     }

</style>
@endsection()


@section('content')

  <h2 style="margin-left:19px;">Account</h2>
  <div id="user_details">
  <table>
  <tr>
    <th>mlnarayana95@gmail.com</th>
    <td><a href="#">Change email</a></td>
  </tr>
  <tr>
    <th>Password</th>
    <td><a href="#">********</a></td>
  </tr>
  <tr>
    <th>Phone</th>
    <td><a href="#">(732) 489-3232</a></td>
  </tr>
  <tr>
    <th>Standard</th>
    <td><a href="#">Change Plan</a></td>
  </tr>
  <tr>
    <th>Language</th>
    <td> <input list="country" name="country" />
        
          <datalist id="country">
            <option value="English(US)"></option>
            <option value="English(UK)"></option>
            <option value="Telugu"></option>
            <option value="Hindi"></option>
            <option value="Spanish"></option>
            <option value="French"></option>
            <option value="Chinese"></option>         
          </datalist>      
      </td>
  </tr>
  </table>
    <p id="buttons">
      <a href="home.html" class="btn1">Save</a>
    </p>
   </div>

   @endsection()