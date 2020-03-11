<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Genealogia Arbol Lateral</title>
        <link type="text/css" href="assets/css/base.css" rel="stylesheet" />
        <link type="text/css" href="assets/css/Spacetree.css" rel="stylesheet" />
        <script language="javascript" type="text/javascript" src="assets/js/jit.js"></script>
        <script language="javascript" type="text/javascript" src="assets/js/exampleTree.js"></script>
    </head>
    <body onload="init();">
        <div id="container">
            <div id="center-container">
                <div id="infovis"></div>    
            </div>
            
            <div id="right-container" >
                <h4>Tree Orientation</h4>
                <table>
                    <tr>
                        <td>
                            <label for="r-left">Left </label>
                        </td>
                        <td>
                            <input type="radio" id="r-left" name="orientation" checked="checked" value="left" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="r-top">Top </label>
                        </td>
                        <td>
                            <input type="radio" id="r-top" name="orientation" value="top" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="r-bottom">Bottom </label>
                        </td>
                        <td>
                            <input type="radio" id="r-bottom" name="orientation" value="bottom" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="r-right">Right </label>
                        </td> 
                        <td> 
                        <input type="radio" id="r-right" name="orientation" value="right" />
                        </td>
                    </tr>
                </table>
                <h4>Selection Mode</h4>
                <table>
                    <tr>
                        <td>
                            <label for="s-normal">Normal </label>
                        </td>
                        <td>
                            <input type="radio" id="s-normal" name="selection" checked="checked" value="normal" />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label for="s-root">Set as Root </label>
                        </td>
                        <td>
                            <input type="radio" id="s-root" name="selection" value="root" />
                        </td>
                    </tr>
                </table>
            </div>
            <div id="log"></div>
        </div>
    </body>
</html>