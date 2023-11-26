<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ratio_Program</title>

</head>

<body>
    <p>ผู้ใช้กรอกได้ 1 ช่อง</p>

    <form action="index.php" method="post">
        <table border="1" style="width : 20%">
            <tbody>
                <tr>
                    <td style="text-align:center">
                        <b> 100 </b>
                    </td>
                    <td style="text-align:center">
                        <b> 7 </b>
                    </td>
                    <td style="text-align:center">
                        <b>107</b>
                    </td>
                    <td style="text-align:center">
                        <b>3</b>
                    </td>
                    <td style="text-align:center">
                        <b>
                            104
                        </b>
                    </td>

                </tr>
                <tr>
                    <td>
                        <input type="text" name=A100 id="A100" value="">
                    </td>
                    <td>
                        <input type="text" name=A7 id="A7" value="">
                    </td>
                    <td>
                        <input type="text" name="A107" id="A107" value="">
                    </td>
                    <td>
                        <input type="text" name="A3" id="A3" value="">
                    </td>
                    <td>
                        <input type="text" name="A104" id="A104" value="">
                    </td>
                </tr>

            </tbody>
        </table>
        <br>
        <button type="button" onclick="gen()">GO</button>
        &nbsp; &nbsp;
        <a href="javascript:ClearForm();">Clear</a>

        <script>
            function ClearForm() {
                document.getElementsByName('A100')[0].value = '';
                document.getElementsByName('A7')[0].value = '';
                document.getElementsByName('A107')[0].value = '';
                document.getElementsByName('A3')[0].value = '';
                document.getElementsByName('A104')[0].value = '';
            }

            function roundToInteger(value) {
                return Math.round(value);
            }

            function gen() {
                // Get input values
                var A100 = parseFloat(document.getElementsByName('A100')[0].value);
                var A7 = parseFloat(document.getElementsByName('A7')[0].value);
                var A107 = parseFloat(document.getElementsByName('A107')[0].value)
                var A3 = parseFloat(document.getElementsByName('A3')[0].value);
                var A104 = parseFloat(document.getElementsByName('A104')[0].value)
// Check if input is provided for A100
if (!isNaN(A100)) {
        // Calculate other values and round to integer
        document.getElementsByName('A7')[0].value = roundToInteger(A100 * 0.07);
        document.getElementsByName('A107')[0].value = roundToInteger(A100 * 1.07);
        document.getElementsByName('A3')[0].value = roundToInteger(A100 * 0.03);
        document.getElementsByName('A104')[0].value = roundToInteger(A100 * 1.04);
    }
    // Check if input is provided for A7
    else if (!isNaN(A7)) {
        // Calculate other values and round to integer
        document.getElementsByName('A100')[0].value = roundToInteger(A7 / 0.07);
        document.getElementsByName('A107')[0].value = roundToInteger(A7 / 0.07 * 1.07);
        document.getElementsByName('A3')[0].value = roundToInteger(A7 / 0.07 * 0.03);
        document.getElementsByName('A104')[0].value = roundToInteger(A7 / 0.07 * 1.04);
    }
    // Check if input is provided for A107
    else if (!isNaN(A107)) {
        // Calculate other values and round to integer
        document.getElementsByName('A100')[0].value = roundToInteger(A107 / 1.07);
        document.getElementsByName('A7')[0].value = roundToInteger(A107 / 1.07 * 0.07);
        document.getElementsByName('A3')[0].value = roundToInteger(A107 / 1.07 * 0.03);
        document.getElementsByName('A104')[0].value = roundToInteger(A107 / 1.07 * 1.04);
    }
    // Check if input is provided for A3
    else if (!isNaN(A3)) {
        // Calculate other values and round to integer
        document.getElementsByName('A100')[0].value = roundToInteger(A3 / 0.03);
        document.getElementsByName('A7')[0].value = roundToInteger(A3 / 0.03 * 0.07);
        document.getElementsByName('A107')[0].value = roundToInteger(A3 / 0.03 * 1.07);
        document.getElementsByName('A104')[0].value = roundToInteger(A3 / 0.03 * 1.04);
    }
    // Check if input is provided for A104
    else if (!isNaN(A104)) {
        // Calculate other values and round to integer
        document.getElementsByName('A100')[0].value = roundToInteger(A104 / 1.04);
        document.getElementsByName('A7')[0].value = roundToInteger(A104 / 1.04 * 0.07);
        document.getElementsByName('A107')[0].value = roundToInteger(A104 / 1.04 * 1.07);
        document.getElementsByName('A3')[0].value = roundToInteger(A104 / 1.04 * 0.03);
    }
            }
        </script>
    </form>
</body>

</html>