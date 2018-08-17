
 <div class="front">
   <div class="header">
      <h1>Pl<i style="color: red;">e</i>ase L<i style="color: red;">o</i>gin</h1>
    </div>
      <form method="post" action="server.php" >
        <div class="fields">
            <input type="text" required="" name="name" placeholder="Input Username">
        
            <button type="button" onclick="showHide()" id="eye" style="color: #999;border-radius: 20px;outline: none;cursor: pointer;font-family: cursive; color: #fff; border: none;font-size: 15px;padding: 4px;margin: 0px;position: relative;left: 92%;top: 30px;margin: 0px;"> View
            </button>

           <input type="password" id="pwd" required="" name="password" placeholder="Input Password">
        </div>
            <a href="reset_pass.php" style="color: white;font-size: 18px;text-decoration: ;margin-left: 10px;">Forget Password?</a><br>
            <input type="submit" name="btn_sub" style="position: relative;left: 190px;" class="btn" value="login">
       </form>
        
          <p style="color:#fff;margin-left: 10px;">Want To Become a Joker? <span><a href="register.php" style="color: #7FD4FF;">Sign up</a></span></p>
          
     </div>

<script type="text/javascript">
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
        if (pwShown == 0) 
        {
            pwShown = 1; 
            show();
        } 
        else {
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
        if (pwShown == 1) {
            pwShown = 0;
            show();
        } else {
            pwShown = 1;
            hide();
        }
    }, false);

    </script>

