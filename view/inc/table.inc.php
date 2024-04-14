<table class="table">
   <tr>
      <th class="bg-transparent border-bottom border-top border-start">Janvier</th>
      <th class="bg-transparent border-bottom border-top">Fevrier</th>
      <th class="bg-transparent border-bottom border-top">Mars</th>
      <th class="bg-transparent border-bottom border-top">Avril</th>
      <th class="bg-transparent border-bottom border-top">Mai</th>
      <th class="bg-transparent border-bottom border-top">Juin</th>
      <th class="bg-transparent border-bottom border-top">Juillet</th>
      <th class="bg-transparent border-bottom border-top">Août</th>
      <th class="bg-transparent border-bottom border-top">Septembre</th>
      <th class="bg-transparent border-bottom border-top">Octobre</th>
      <th class="bg-transparent border-bottom border-top">Novembre</th>
      <th class="bg-transparent border-bottom border-top border-end">Décembre</th>
   </tr>
   <tr>
      <td id="incBarJan" class="bg-transparent border-bottom border-start"><?=$info["inc_jan"]?></td>
      <td id="incBarFeb" class="bg-transparent border-bottom"><?=$info["inc_feb"]?></td>
      <td id="incBarMar" class="bg-transparent border-bottom"><?=$info["inc_mar"]?></td>
      <td id="incBarApr" class="bg-transparent border-bottom"><?=$info["inc_apr"]?></td>
      <td id="incBarMay" class="bg-transparent border-bottom"><?=$info["inc_may"]?></td>
      <td id="incBarJun" class="bg-transparent border-bottom"><?=$info["inc_jun"]?></td>
      <td id="incBarJul" class="bg-transparent border-bottom"><?=$info["inc_jul"]?></td>
      <td id="incBarAug" class="bg-transparent border-bottom"><?=$info["inc_aug"]?></td>
      <td id="incBarSep" class="bg-transparent border-bottom"><?=$info["inc_sep"]?></td>
      <td id="incBarOct" class="bg-transparent border-bottom"><?=$info["inc_oct"]?></td>
      <td id="incBarNov" class="bg-transparent border-bottom"><?=$info["inc_nov"]?></td>
      <td id="incBarDec" class="bg-transparent border-bottom border-end"><?=$info["inc_dec"]?></td>
   </tr>
  </table>
      <div class="w-100 px-3 d-flex flex-row">
         <div class="incBar border border-3 py-5 w-50" id="incGraphJan">Jan</div>
         <div class="incBar border border-3 py-5 w-50" id="incGraphFeb">Feb</div>
         <div class="incBar border border-3 py-5 w-50" id="incGraphMar">Mar</div>
         <div class="incBar border border-3 py-5 w-50" id="incGraphApr">Apr</div>
         <div class="incBar border border-3 py-5 w-50" id="incGraphMay">May</div>
         <div class="incBar border border-3 py-5 w-50" id="incGraphJun">Jun</div>
         <div class="incBar border border-3 py-5 w-50" id="incGraphJul">Jul</div>
         <div class="incBar border border-3 py-5 w-50" id="incGraphAug">Aug</div>
         <div class="incBar border border-3 py-5 w-50" id="incGraphSep">Sep</div>
         <div class="incBar border border-3 py-5 w-50" id="incGraphOct">Oct</div>
         <div class="incBar border border-3 py-5 w-50" id="incGraphNov">Nov</div>
         <div class="incBar border border-3 py-5 w-50" id="incGraphDec">Dec</div>
      </div>
      <div class="row">
<div class="col">
      <ul class="list-group d-flex flex-row-reverse mt-2">
         <li class="list-group-item w-25 mx-2 border bg-info">Moyenne : <span id="moyenneTag"></span></li>
         <li class="list-group-item w-25 mx-2 border bg-success">Bien &lpar;> 60%&rpar; : <span id="bienTag"></span></li>
         <li class="list-group-item w-25 mx-2 border bg-warning">Attention &lpar;30-45%&rpar; : <span id="attTag"></span></li>
         <li class="list-group-item w-25 mx-2 border bg-danger">Danger! &lpar;< 30%&rpar;: <span id="dangTag"></span></li>
      </ul>
      
      
   </div>
   <div class="row">