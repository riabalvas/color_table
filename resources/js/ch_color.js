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