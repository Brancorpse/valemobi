<script type="text/javascript">
 
function validaForm(){
           d = document.additem;
           //validar nome
           if (d.name.value == ""){
                     alert("O campo NOME  deve ser preenchido!");
                     d.name.style.backgroundColor="red";
                     d.name.style.color="#ffffff";
                     d.name.focus();
                     return false;
           }
		   
           if (d.merch_type.value == ""){
                     alert("O campo NOME  deve ser preenchido!");
                     d.merch_type.style.backgroundColor="red";
                     d.merch_type.style.color="#ffffff";
                     d.merch_type.focus();
                     return false;
           }
		   if (d.price.value == ""){
                     alert("O campo NOME  deve ser preenchido!");
                     d.price.style.backgroundColor="red";
                     d.price.style.color="#ffffff";
                     d.price.focus();
                     return false;
           }
		   if (d.quantity.value == ""){
                     alert("O campo NOME  deve ser preenchido!");
                     d.quantity.style.backgroundColor="red";
                     d.quantity.style.color="#ffffff";
                     d.quantity.focus();
                     return false;
           }
		   if (d.transation.value == ""){
                     alert("O campo NOME  deve ser preenchido!");
                     d.transation.style.backgroundColor="red";
                     d.transation.style.color="#ffffff";
                     d.transation.focus();
                     return false;
           }		   
         
         }
		 
document.additem.submit();
         
}
 
  
 </script>