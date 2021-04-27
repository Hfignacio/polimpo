<?php require_once("header.php");
    $cpf = '';
    $dtnasc = '';
    $nome = '';
    $surname = '';
    $cep = '';
    $end = '';
    $num = '';
    $comp = '';
    $city = '';
    $estate = '';
    $tel = '';
    $cel = '';
    $banco = 'Cod. - Escolha seu Banco';
    $tipocc = 'Tipo de Conta';
    $dig = '';
    $ag = '';
    $cc = '';
    $email = '';
    $dtdisp = '';
?>
<section id="work-us">
    <div>
        <div id="form-title">
            <h1>Torne-se um apresentante !</h1>
            <h3>Forneça seus dados para entrarmos em contato e agendarmos uma entrevista.</h3>
        </div>
            <?php include_once('../php/sendRevendor.php');?>
            <form method="POST" id="form-login" style="display: none;">
                <table id="work-form">
                    <tr>
                        <td>
                            <input type="text" id="flemail" name="flemail" placeholder="Email*">
                        </td>
                        <td>
                            <input type="password" id="flsenha" name="flsenha" placeholder="Senha*">
                        </td>
                    </tr>
                </table>
                <div id="form-bottom">
                    <input type="submit" id="submit2" name="submit2" class="btn btn-primary btn-lg"></input>
                </div>
            </form>
            <form method="POST" id="form-data" style="display: inline;">
                <table id="work-form">
                <tr>
                    <td>
                        <input type="text" id="fcpf" maxlength="11" name="fcpf" placeholder="Digite seu CPF e aperte Enter*" value="<?php echo $cpf ?>">
                    </td>
                    <td>
                        <input onfocus="myNiver()" onfocusout="validateDate()" type="text" id="fdtnasc" name="fdtnasc" placeholder="Data de Nascimento*" value="<?php echo $dtnasc ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="fname" name="fname" placeholder="Nome*" value="<?php echo $nome ?>">
                    </td>
                    <td>
                        <input type="text" id="fsurname" name="fsurname" placeholder="Sobrenome*" value="<?php echo $surname ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="border: none; padding: 0;">
                        <div style="height: 72px; overflow:hidden;">
                            <table>
                                <td>
                                    <input type="text" id="fcep" onfocusout="callCep()" name="fcep" placeholder="CEP*" value="<?php echo $cep ?>">
                                </td>
                                <td style="width: 245px;">
                                    <input type="text" id="faddress"  name="faddress" placeholder="Endereço*" value="<?php echo $end ?>">
                                </td>
                                <td style="width: 90px;">
                                    <input type="text" id="fnum" name="fnum" placeholder="Nº*" value="<?php echo $num ?>">
                                </td>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="border: none; padding: 0;">
                        <div style="height: 72px; overflow:hidden;">
                            <table>
                                <td>
                                    <input type="text" id="fcomp" name="fcomp" placeholder="Complemento*" value="<?php echo $comp ?>">
                                </td>
                                <td>
                                    <input type="text" id="fcity" name="fcity" placeholder="Cidade*" value="<?php echo $city ?>">
                                </td>
                                <td>
                                    <input type="text" id="festate" name="festate" placeholder="Estado*" value="<?php echo $estate ?>">
                                </td>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="ftel" maxlength="10" name="ftel" placeholder="Telefone*" value="<?php echo $tel ?>">
                    </td>
                    <td>
                        <input type="text" id="fcel" maxlength="11" name="fcel" placeholder="Celular*" value="<?php echo $cel ?>">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="border: none; padding: 0;">
                        <div style="height: 72px; overflow:hidden;">
                        <table>
                            <tr>
                                <td style="width: 130px;">
                                    <select id="fbancname" name="fbancname" placeholder="Nome do Banco*">
                                        <?php include_once('../php/bancos-list.php');?>
                                    </select>
                                </td>
                                <td>
                                    <select id="ftipocc" name="ftipocc" placeholder="Tipo Conta*" style="border:none">
                                        <option value="<?php echo $tipocc ?>"><?php echo $tipocc ?></option>
                                        <option value="Conta Corrente">Conta Corrente</option>
                                        <option value="Conta Poupança">Conta Poupança</option>
                                    </select>
                                </td>            
                            </tr>
                        </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="border: none; padding: 0;">
                        <div style="height: 72px; overflow:hidden;">
                            <table>
                                <td>
                                    <input type="text" id="fagn" name="fagn" placeholder="Agencia*" value="<?php echo $ag ?>">
                                </td>
                                <td style="width: 245px;">
                                    <input type="text" id="fcc" name="fcc" placeholder="Conta Corrente*" value="<?php echo $cc ?>">
                                </td>
                                <td style="width: 90px;">
                                    <input type="text" id="fdig" name="fdig" placeholder="Digito conta*" value="<?php echo $dig ?>">
                                </td>
                            </table>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="email" id="femail" name="femail" placeholder="E-mail*" value="<?php echo $email ?>">
                    </td>
                </tr>
                <!--<tr>
                    <td colspan="2">
                        <input type="text" id="flinkedin"  name="flinkedin" placeholder="Link do Perfil no LinkedIn">
                    </td>
                </tr>-->
                <tr id="trdisp">
                    <td>
                        <input onfocus="myDisp()" onfocusout="validateDate()" type="text" id="fdtdisp" name="fdtdisp" placeholder="Disponibilidade - Data de ínicio*" value="<?php echo $dtdisp ?>">
                    </td>
                </tr>
                <tr id="trsenha">
                    <td>
                        <input type="password" id="fsenha" name="fsenha" placeholder="Senha*">
                    </td>
                    <td>
                        <input type="password" id="fsegsenha" name="fsegsenha" placeholder="Repita a senha*">
                    </td>
                </tr>
            </table>
            </div>
            <div id="form-bottom">
                <input type="submit" id="submit" name="submit" class="btn btn-primary btn-lg"></input>
                <h3>Ao enviar você confirma que todos os dados são verdadeiros, esta vaga se aplica apenas para maiores de idade de acordo com a lei 422.<br>Entraremos em contato no prazo de 48hrs.</h3>
            </div>
        </form>
</section>
<script type="text/javascript">

    document.addEventListener("DOMContentLoaded", function(event) {

        if(document.getElementById("fname").value != "") {

            document.getElementById("form-login").style.display = "inline";
            document.getElementById("form-data").style.display = "none";
            document.getElementById("form-bottom").style.display = "none";
        
        }

        if (document.getElementById("fdtnasc").value != ""){

            document.getElementById("form-login").style.display = "none";
            document.getElementById("form-data").style.display = "inline";
            document.getElementById("form-bottom").style.display = "inline";
            document.getElementById("fdtnasc").focus();
            document.getElementById("fdtdisp").setAttribute("onfocusout", "");
            document.getElementById("fdtdisp").focus();
            document.getElementById("fname").focus();
            document.getElementById("trdisp").style.display = "none";
            document.getElementById("trsenha").style.display = "none";
        
        }

    });

    function setInputFilter(textbox, inputFilter) {
      ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
        textbox.addEventListener(event, function() {
          if (inputFilter(this.value)) {
            this.oldValue = this.value;
            this.oldSelectionStart = this.selectionStart;
            this.oldSelectionEnd = this.selectionEnd;
          } else if (this.hasOwnProperty("oldValue")) {
            this.value = this.oldValue;
            this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
          }
        });
      });
    }

    setInputFilter(document.getElementById("fname"), function(value) {
      return /^[\pL\pM\p{Zs}.-]+$/u.test(value);
    });
    setInputFilter(document.getElementById("fsurname"), function(value) {
      return /^[\pL\pM\p{Zs}.-]+$/u.test(value);
    });
    setInputFilter(document.getElementById("fbancname"), function(value) {
      return /^[\pL\pM\p{Zs}.-]+$/u.test(value);
    });
    setInputFilter(document.getElementById("fcity"), function(value) {
      return /^[\pL\pM\p{Zs}.-]+$/u.test(value);
    });
    setInputFilter(document.getElementById("festate"), function(value) {
      return /^[\pL\pM\p{Zs}.-]+$/u.test(value);
    });

    setInputFilter(document.getElementById("fcpf"), function(value) {
        return /^\d*$/.test(value); });

    setInputFilter(document.getElementById("ftel"), function(value) {
        return /^\d*$/.test(value); });

    setInputFilter(document.getElementById("fcel"), function(value) {
        return /^\d*$/.test(value); });

    setInputFilter(document.getElementById("fagn"), function(value) {
        return /^\d*$/.test(value); });

    setInputFilter(document.getElementById("fcc"), function(value) {
        return /^\d*$/.test(value); }
        );

    function getDate() {
    
        var today = new Date();
        var dd = String(today.getDate()).padStart(2, '0');
        var mm = String(today.getMonth() + 1).padStart(2, '0');
        var yyyy = today.getFullYear();
        var data = new Array(dd,mm,yyyy);
        return data;
    
    }

    function myNiver() {

        var atributo = document.getElementById("fdtnasc").getAttribute("type");

        if (atributo == "text") {

            var data = getDate();
            var ano = data[2]-18;
            var dataValida = ano + '-' + data[1] + '-' + data[0]; 
            //var dataValida = "2019-11-11";
            var dt = document.getElementById("fdtnasc").value
            document.getElementById("fdtnasc").setAttribute("type", "date");
            document.getElementById("fdtnasc").setAttribute("max", dataValida);

            if (dt == "") {
                
                document.getElementById("fdtnasc").value = dataValida;
    
            }

        }

    } 
      
    function myDisp() {

        var atributo = document.getElementById("fdtdisp").getAttribute("type");

        if (atributo == "text") {

            var data = getDate();
            var today = data[2] + '-' + data[1] + '-' + data[0];

            var dt = document.getElementById("fdtnasc").value
            document.getElementById("fdtdisp").setAttribute("type", "date");
            document.getElementById("fdtdisp").setAttribute("min", today);

            if ( dt == "" ) {
            
                document.getElementById("fdtdisp").value = today;
            
            }

        }

    }

    function validateDate() {

        var idName = event.target.id;
        var dataValue = event.target.value;
        var data = getDate();

        var ano = data[2]-18;
        var dataNiverMin = ano + '-' + data[1] + '-' + data[0];
        var dataNiverMin = new Date(dataNiverMin);

        var dataDispoMin = data[2] + '-' + data[1] + '-' + data[0];
        var dataDispoMin = new Date(dataDispoMin);

        var dataValor = new Date(dataValue);

        if (idName == "fdtnasc" && dataNiverMin < dataValor) {
        
            var dataNiverMin = ano + '-' + data[1] + '-' + data[0];
            document.getElementById("fdtnasc").value = dataNiverMin;
            document.getElementById("fdtnasc").focus();

            alert("Idade abaixo da mínima !");

        } 

        if (idName == "fdtdisp" && dataDispoMin > dataValor) {
        
            var dataDispoMin = data[2] + '-' + data[1] + '-' + data[0];
            document.getElementById("fdtdisp").value = dataDispoMin;
            document.getElementById("fdtdisp").focus();

            alert("Data de disponibilidade abaixo da mínima!");

        }

    }


    function callCep() {

        const cep = document.querySelector("#fcep")
        let search = cep.value.replace("-","")

        const showData = (result)=> {
            for(const campo in result){
                if(campo == "logradouro"){
                    document.getElementById("faddress").value = result[campo]
                }
                if(campo == "localidade"){
                    document.getElementById("fcity").value = result[campo]
                }
                if(campo == "uf"){
                    document.getElementById("festate").value = result[campo]
                }

            }
        }

        const options = {
            method: 'GET',
            mode: 'cors',
            cache: 'default'
        }
        if (cep.value != "") {

            fetch(`https://viacep.com.br/ws/${search}/json/`, options)
            .then(response =>{ response.json()
                .then( data => showData(data))
            })
            .catch(e => console.log('Deu Erro: '+ e,message))
        
        }

    }

</script>
<?php require_once("footer.php");?>
</body>
</html>