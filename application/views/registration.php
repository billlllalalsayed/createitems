<!DOCTYPE html>
<html>

<head>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Registration form</title>
    <style>
        .note {
            text-align: center;
            height: 80px;
            background: -webkit-linear-gradient(left, #0072ff, #8811c5);
            color: #fff;
            font-weight: bold;
            line-height: 80px;
        }

        .form-content {
            padding: 5%;
            border: 1px solid #ced4da;
            margin-bottom: 2%;
        }

        .form-control {
            border-radius: 1.5rem;
        }

        .btnSubmit {
            border: none;
            border-radius: 1.5rem;
            padding: 1%;
            width: 20%;
            cursor: pointer;
            background: #0062cc;
            color: #fff;
        }
    </style>
</head>

<body>
    <form method="post">
        <div class="container register-form">
            <div class="form">
                <div class="note">
                    <p>Registeration Form</p>
                </div>
                <div class="form-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <tr>
                                    <td width="230">Enter Your Name </td>
                                    <td width="329"><input type="text" name="name" /></td>
                                </tr>
                                <tr>
                                    <td>Enter Your Email </td>
                                    <td><input type="text" name="email" /></td>
                                </tr>
                                <tr>
                                    <td>Enter Your Number </td>
                                    <td><input type="text" name="phone" /></td>
                                </tr>
                                <tr>
                                    <td colspan="2" align="center"><input type="submit" name="save" value="Save Data" /></td>
                                </tr>
                                <br>
                                <tr><a href="http://127.0.0.1:8012/createitems/index.php/Item/dispdata">Display Data</a></tr>
                                </table>

    </form>
</body>

</html>