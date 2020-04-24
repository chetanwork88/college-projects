function myFunction() 
{
    var r = confirm("Do you want to mark this project as completed? ");
    if (r == true) 
    {
    
      $("tr.table").click(function() {
        var tableData = $(this).children("td").map(function() {
            return $(this).text();
        }).get();

        alert("Your data is: " + $.trim(tableData[0]) + " , " + $.trim(tableData[1]));
    });
  
  
    } 
    
    
    
    
    /*document.getElementByClassName("").innerHTML = txt;*/

   /* alert("Row index is: " + x.rowIndex);*/
}