/* Open when someone clicks on the span element */
// function openNav() {
//     document.getElementById("myNav").style.width = "20%";
//     document.getElementById("myNav").style.height = "100%";
// }

/* Close when someone clicks on the "x" symbol inside the overlay */
// function closeNav() {
//     document.getElementById("myNav").style.width = "0%";
// }
/* Close when someone clicks on the "x" symbol inside the overlay */
// function closeNav() {
//     document.getElementById("myNav").style.width = "0%";
// }

var myVar;

function myFunction() {
    myVar = setTimeout(showPage, 3000);
    myVar = setInterval(alertFunc, 7000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
  document.getElementById("loading").style.display = "none";
  document.getElementById("myDiv").style.display = "block";
}

           function show()
            {
            var p = document.getElementById('pwd');
            p.setAttribute('type','text');  
            }

            function hide()
            {
               var p = document.getElementById('pwd');
            p.setAttribute('type','password');   
            }

            function showHide()
            {
                var pwShown = 0;

            document.getElementById("eye").addEventListener("click", function() {
              if (pwShown == 1) 
              {
                  pwShown = 1; 
                  show();
              } else {
                  pwShow = 0;
                  hide();
              }
             }, true);

          }

          function show() {
              var p = document.getElementById('pwd');
              p.setAttribute('type', 'text');
          }

          function hide() {
              var p = document.getElementById('pwd');
              p.setAttribute('type', 'password');
          }

          var pwShown = 0;

          document.getElementById("eye").addEventListener("click", function () {
              if (pwShown == 0) {
                  pwShown = 0;
                  show();
              } else {
                  pwShown = 1;
                  hide();
              }
          }, false);