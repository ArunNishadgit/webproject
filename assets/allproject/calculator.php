 <link rel="stylesheet" href="./projectcss/calculater.css">
 <title>Mini Project</title>


 <div class="container">
     <h1 style="color:white;">My Calculator</h1>
     <div class="calculator dark">
         <h4 id="brand">Calculator<h4>
                 <div class="theme-toggler active">
                     <i class="toggler-icon"></i>
                 </div>
                 <div class="display-screen">
                     <div id="display">
                     </div>
                 </div>
                 <div class="buttons">
                     <table>
                         <tr>
                             <td><button class="btn-operator" id="clear">C</button></td>
                             <td><button class="btn-operator" id="/">&divide;</button></td>
                             <td><button class="btn-operator" id="*">&times;</button></td>
                             <td><button class="btn-operator" id="backspace">
                                     < </button>
                             </td>
                         </tr>
                         <tr>
                             <td><button class="btn-number" id="7">7</button></td>
                             <td><button class="btn-number" id="8">8</button></td>
                             <td><button class="btn-number" id="9">9</button></td>
                             <td><button class="btn-operator" id="-">-</button></td>
                         </tr>
                         <tr>
                             <td><button class="btn-number" id="4">4</button></td>
                             <td><button class="btn-number" id="5">5</button></td>
                             <td><button class="btn-number" id="6">6</button></td>
                             <td><button class="btn-operator" id="+">+</button></td>
                         </tr>
                         <tr>
                             <td><button class="btn-number" id="1">1</button></td>
                             <td><button class="btn-number" id="2">2</button></td>
                             <td><button class="btn-number" id="3">3</button></td>
                             <td rowspan="2"><button class="btn-equal" id="equal">=</button></td>
                         </tr>
                         <tr>
                             <td><button class="btn-operator" id="(">(</button></td>
                             <td><button class="btn-number" id="0">0</button></td>
                             <td><button class="btn-operator" id=")">)</button></td>
                         </tr>
                     </table>
                 </div>
     </div>
 </div>
 <script src="./projectscript/calculater.js"></script>