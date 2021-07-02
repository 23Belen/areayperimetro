<?php

class TRIANGULO{
    private $BASE; 
    private $ALTURA;
    private $LADO1;
    private $LADO2;
    PRIVATE $LADO3;
            
    function TRIANGULO(){
         
        $this->BASE= 0; 
        $this->ALTURA = 0;
        $this->LADO1 = 0;
        $this->LADO2 = 0;
        $this->LADO3 = 0;
        
        
    }
    public function get_triangulo_area(){ 
        $html = '
                <form ACTION="" method="POST" name="trasporte" aling="center"> 
                    <table aling = "center" border = "1">
                        <tr>
                            <td colspan="2">AREA-TRIANGULO</td>
                        </tr>
                        <tr>
                            <td>BASE</td>
                            <td><input type="text" name="largo" size=4></td>
                        </tr>
                        <tr>
                            <td>ALTURA</td>
                            <td><input type="text" name="ancho" size=4></td>
                        </tr>
                        <tr aling = "center">
                            <td aling = "center" colspan= "2" ><center><input type="submit" name="guardar" value="Resolver"></center></td>
                        </tr>
                    </table>
                </form>';
        return $html;
    }
    
    public function get_from_transporte_PERIMETRO(){
        $html = '
                <form ACTION="" method="POST" name="trasporte" aling="center"> 
                    <table aling = "center" border = "1">
                        <tr>
                            <td colspan="2">PERIMETRO-TRIANGULO</td>
                        </tr>
                        <tr>
                            <td>LADO1</td>
                            <td><input type="text" name="LADO1" size=4></td>
                        </tr>
                        <tr>
                            <td>LADO2</td>
                            <td><input type="text" name="LADO2" size=4></td>
                        </tr>
                        <tr>
                            <td>LADO3</td>
                            <td><input type="text" name="LADO3" size=4></td>
                        </tr>
                        <tr aling = "center">
                            <td aling = "center" colspan= "2" ><center><input type="submit" name="GUARDAR PERIMETRO" value="Resolver"></center></td>
                        </tr>
                    </table>
                </form>';
        return $html;
        
    }

    public function area($BASE,$ALTURA){ // metodos area
        $area = $BASE* $ALTURA;
        return $area;
     }
    
     public function PERIMETRO($LADO1,$LADO2,$LADO3){
         $PERIMETRO=($LADO1+$LADO2+$LADO3);
         return perimetro;
         
     }
}

?>


