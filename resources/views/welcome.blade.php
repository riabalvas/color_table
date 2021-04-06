<!DOCTYPE html>
<html lang="en">
    <head>
       <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

        <title>Laravel</title>
       <!-- <script src="./resources/js/ch_color.js"></script> -->
        
           
    </head>
   
    <body>
    <div class='container' id = 'cont' >
    <header>
    <h1>Findely i start to create of my lesson site!</h1>
    <h3>author : Ryabko Oleksiy</h3>
    </header>

    <nav style = " border : 2px solid yellowgreen;text-align: center">
    <a href='/start_page' style = " border : 2px solid black">start page</a>
    <a href='/simple_tab' style = " border : 2px solid black">урок 1</a>
    <a href='/color_tab' style = " border : 2px solid black">урок 2</a>
    <a href='/form' style = " border : 2px solid black">урок 3</a>
    </nav>

    <main>
   <h3>This is a main part of my site</h3>
        
    @if(!empty($sq_tab))
        <div class = 'row '> 
        
        
        @for ($x = 1; $x < 6 ; $x++ )

        <div class="col-sm-2" style = " border : 2px solid black">
        
        @for ($y = 1; $y < 11 ; $y++ )
        
            <div style = "text-align:center">{{ $sq_tab[$x][$y] }}</div>
         @endfor   
            
            </div> 

            
        @endfor

        </div> 

        <div class = 'row ' > 
        
        @for ($x = 6; $x < 11 ; $x++ )

<div class="col-sm-2" style = " border : 2px solid black">

@for ($y = 1; $y < 11 ; $y++ )

    <div style = "text-align:center" >{{ $sq_tab[$x][$y] }}</div>
 @endfor   
    
    </div> 

    
@endfor

        
        
            @endif 
          </div>  
          
          @if(!empty($painted_tab))

        <div class = 'row'>

          
         
          @for ( $x = 1; $x < 6; $x++)

             <div class="col-sm-2" style = " border : 2px solid black">
          
          
                 @for( $y = 1;$y < 11; $y++)
                 <div style = "text-align:center" id = '{{ $pt[$x][$y] }}'>
                 {{ $painted_tab[$x][$y] }}  
                  </div>  
                  
                  
           
        
                @endfor     
             </div>

          @endfor   
            
        </div>

        

               
             <div class = 'row'>

          
         
@for ( $x = 6; $x < 11; $x++)

   <div class="col-sm-2" style = " border : 2px solid black">


       @for( $y = 1;$y < 11; $y++)
       <div style = "text-align:center" id = '{{ $pt[$x][$y]}}'>
       {{ $painted_tab[$x][$y] }}  
        </div>  
        
        
 

      @endfor     
   </div>

@endfor   
  
</div>



   @endif 

   

   </main>

</div>

@if($print_form == "true")

<div>
        <form action='/submit' method = 'POST'>    
            @csrf      
            <p><b>Будь ласка, введіть текстовий рядок.</b></p>    
            <textarea name='comment' cols='40' rows='1'></textarea></p>    
            <p><input type='submit'></p>    
            </form> 
    </div> 

@endif

@if(!empty($revers))
<p>{{ $revers }}</p>
@endif


<div class="row1"style = "text-align:center ; border : 3px solid red">
<h3>This is a footer</h3>
</div>
    <script>
 id=1;
 for(id = 1; id < 101; id++){
a=document.getElementById(id).innerHTML;
b=a.split(""); 
c="";
f=[];
for(i=0;i<b.length;i++) 
{
if(b[i] == "1") 
{
 f[i]="<font color='red'>"+b[i]+"</font>"
}
else if(b[i] == "2") 
{
 f[i]="<font color='green'>"+b[i]+"</font>"
}
else if(b[i] == "3") 
{
 f[i]="<font color='yellow'>"+b[i]+"</font>"
}
else if(b[i] == "4") 
{
 f[i]="<font color='blue'>"+b[i]+"</font>"
} 
  else{f[i] = b[i]
} 
c = c + f[i]; 
};

document.getElementById(id).innerHTML=c;

}
</script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
     
    </body>
</html>
