<?php
echo <<<HERE
<script>
    function calc_docs(){
        let docs_select = document.getElementById('docs_select');
        let docs_p = document.getElementById('docs_p');
        if (docs_select.value == "Самостоятельно"){
            docs_p.innerHTML = "";
        }
        if (docs_select.value == "С агентом"){
            docs_p.innerHTML = "5 000 руб.";
        }      
        calcated();   
    }

    function calc_cof(){
        let cof_select = document.getElementById('cof_select');
        let cof_p = document.getElementById('cof_p');
        let mat_select = document.getElementById('mat_select');
        let mat_p = document.getElementById('mat_p');
        if (cof_select.value == "-"){
            cof_p.innerHTML = "";
            mat_select.style = "display: none;";
            mat_p.style = "display: none;";
            mat_p1.style = "display: none;";
            mat_p1.innerHTML = "";
        }
        if (cof_select.value == "Обитый тканью"){
            cof_p.innerHTML = "";
            mat_select.style = "display: block";
            mat_p.style = "display: block;";
            //mat_select.options.length = 0;
            while(mat_select.options.length > 0){
                mat_select.options[mat_select.options.length-1] = null;
            }
            let NewOption = new Option("ХБ");
            mat_select.options[mat_select.options.length]=NewOption;
            NewOption = new Option("Бархат");
            mat_select.options[mat_select.options.length]=NewOption;
            cof_p.style = "display: none";
            mat_p1.innerHTML = "1 400 руб.";
            mat_p1.style = "display: block";
        }     
        if (cof_select.value == "Полированный"){
            cof_p.innerHTML = "";
            mat_select.style = "display: none;";
            mat_p.style = "display: none;";
            cof_p.style = "display: block";
            cof_p.innerHTML = "от 12 000 до 80 000 руб.";
            mat_p1.style = "display: none;";
            mat_p1.innerHTML = "";
        }    
        if (cof_select.value == "Мусульманский"){
            cof_p.innerHTML = "";
            mat_select.style = "display: block";
            mat_p.style = "display: block;";
            //mat_select.options.length = 0;
            while(mat_select.options.length > 0){
                mat_select.options[mat_select.options.length-1] = null;
            }
            let NewOption = new Option("Не обитый");
            mat_select.options[mat_select.options.length]=NewOption;
            NewOption = new Option("Обитый тканью");
            mat_select.options[mat_select.options.length]=NewOption;
            NewOption = new Option("Полированный");
            mat_select.options[mat_select.options.length]=NewOption;
            cof_p.style = "display: none";
            mat_p1.innerHTML = "5 500 руб.";
            mat_p1.style = "display: block";
            /*let NewOption = new Option("Не обитый");
            mat_select.append(NewOption);
            NewOption = new Option("Обитый тканью");
            mat_select.append(NewOption);
            NewOption = new Option("Полированный");
            mat_select.append(NewOption);*/
        }
        calcated();
    }

    function calc_fur(){
        let fur_select = document.getElementById('fur_select');
        let fur_p = document.getElementById('fur_p');  
        let fur_check = document.getElementById('fur_check');  
        let fur_p2 = document.getElementById('fur_p2');  
        let fur_check2 = document.getElementById('fur_check2');  
        let check1_p = document.getElementById('fur_pp');
        let check2_p = document.getElementById('fur_pp2');   
        if (fur_select.value == "Да"){
            fur_check.style = "display: inline-block";
            fur_p.style = "display: inline-block";
            fur_check2.style = "display: inline-block";
            fur_p2.style = "display: inline-block"
        }
        if (fur_select.value == "Нет"){
            fur_check.style = "display: none";
            fur_p.style = "display: none";
            fur_check2.style = "display: none";
            fur_p2.style = "display: none";
            fur_check.checked = 0;
            fur_check2.checked = 0;
            check1_p.style = "display: none";
            check2_p.style = "display: none";
        }    
    }

    function calc_mat(){
        let mat_select = document.getElementById('mat_select');
        let mat_p1 = document.getElementById('mat_p1');
        if (mat_select.value == "ХБ"){
            mat_p1.innerHTML = "1 400 руб.";
            mat_p1.style = "display: block";
        }
        if (mat_select.value == "Бархат"){
            mat_p1.innerHTML = "от 5 000 до 8 000 руб.";
            mat_p1.style = "display: block";
        }    
        if (mat_select.value == "Не обитый"){
            mat_p1.innerHTML = " 5 500 руб.";
            mat_p1.style = "display: block";
        }  
        if (mat_select.value == "Обитый тканью"){
            mat_p1.innerHTML = "от 7 000 до 9 000 руб.";
            mat_p1.style = "display: block";
        }  
        if (mat_select.value == "Полированный"){
            mat_p1.innerHTML = "25 000 руб.";
            mat_p1.style = "display: block";
        }    
        calcated();   
    }

    function calc_check(){
        let check1 = document.getElementById('fur_check');
        let check2 = document.getElementById('fur_check2');
        let check1_p = document.getElementById('fur_pp');
        let check2_p = document.getElementById('fur_pp2');
        if (check1.checked){
            check1_p.innerHTML = "от 1 400 до 4 000 руб.";
            check1_p.style = "display: block";
        }
        else{
            check1_p.style = "display: none";
            check1_p.innerHTML = "";    
        }
        if (check2.checked){
            check2_p.innerHTML = "от 800 до 1 600 руб.";
            check2_p.style = "display: block";
        }
        else{
            check2_p.style = "display: none";   
            check2_p.innerHTML = ""; 
        }
        calcated();
    }

    function calcated(){
        let min = 0;
        let max = 0;
        let calc = document.getElementById('calc');
        let docs_p = document.getElementById('docs_p');
        let check1_p = document.getElementById('fur_pp');
        let check2_p = document.getElementById('fur_pp2');
        if (docs_p.innerHTML == "5 000 руб."){
            min = min + 5000;
            max = max + 5000;
        };
        if (mat_p1.innerHTML == "1 400 руб."){
            min = min + 1400;
            max = max + 1400;
        };
        if (mat_p1.innerHTML == "от 5 000 до 8 000 руб."){
            min = min + 5000;
            max = max + 8000;
        };
        if (cof_p.innerHTML == "от 12 000 до 80 000 руб."){
            min = min + 12000;
            max = max + 80000;
        };
        if (mat_p1.innerHTML == "5 500 руб."){
            min = min + 5500;
            max = max + 5500;
        };
        if (mat_p1.innerHTML == "от 7 000 до 9 000 руб."){
            min = min + 7000;
            max = max + 9000;
        };
        if (mat_p1.innerHTML == "25 000 руб."){
            min = min + 25000;
            max = max + 25000;
        };
        if (check1_p.innerHTML == "от 1 400 до 4 000 руб."){
            min = min + 1400;
            max = max + 4000;
        };
        if (check2_p.innerHTML == "от 800 до 1 600 руб."){
            min = min + 800;
            max = max + 1600;
        };
        if (min == max){
            calc.innerHTML = min + " руб.";
        }
        else{
            calc.innerHTML = "от " + min + " до " + max + " руб.";
        } 
    }

</script>
<div class="wrapper">
<div class="large_setout">
<div class='Page_Hdiv'>Расчёт стоимости похорон</div><div style="width: 100%; height: 10px"></div>
<div class="TextContainer">
    <form action="Aynene.php" method="post">
        <p class="Question">Оформление документов</p>
        <select id="docs_select" onchange="calc_docs()">
            <option>Самостоятельно</option>
            <option>С агентом</option>
        </select>
       <p id="docs_p"></p>

       <p class="Question">Гроб</p>
       <select id="cof_select" onchange="calc_cof()">
           <option>-</option>
           <option>Обитый тканью</option>
           <option>Полированный</option>
           <option>Мусульманский</option>
       </select>
      <p id="cof_p"></p>

      <p class="Question" id="mat_p" style="display: none;">Материал</p>
      <select id="mat_select" onchange="calc_mat()" style="display: none;">
    </select>
   <p id="mat_p1"></p>

   <p class="Question">Фурнитура в гроб</p>
   <select id="fur_select" onchange="calc_fur()">
        <option>Нет</option>
        <option>Да</option>
   </select>
   <br>
   <input id="fur_check" type="checkbox" style="display: none;" onchange="calc_check()">
   <p id='fur_p' style="display: none;">Ручки</p>
   <p id='fur_pp' style="display: none;"></p>
   <br>
   <input id="fur_check2" type="checkbox" style="display: none;" onchange="calc_check()">
   <p id='fur_p2' style="display: none;">Закрутки</p>
   <p id='fur_pp2' style="display: none;"></p>
   <p class="Question">Итого:</p>
   <p id='calc'></p>
    </form>
</div>
</div>
</div>
HERE;
?>