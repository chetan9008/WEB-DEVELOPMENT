var exp="";
var btn = document.querySelectorAll(".btn");
function factorial( x)
{
    if(x==0)
    return 1;
    else
    return x*factorial(x-1);
}
function powerof(exp)
{
    var x = "";
    var x1= "";
    var x2 = "";
    x = exp;
    for(var i=0;i<x.length;i++)
            {
                if(x[i] == "^")
                {
                    for(var j=0;j<i;j++)
                    {
                    x1 += x[j];
                    }
                    for(var k=i+1;k<x.length;k++)
                    {
                        x2+=x[k];
                    }
                    document.getElementById("input").value = Math.pow(x1,x2);
                    return 0;
                }
            }
}
document.getElementById("x").onclick = function()
{
    document.getElementById("x").value = "x";
}
document.getElementById("sqr").onclick = function()
{
    document.getElementById("sqr").value = "sqr";
}
document.getElementById("phi").onclick = function()
{
    document.getElementById("phi").value = "phi";
}
document.getElementById("ex").onclick = function()
{
    document.getElementById("ex").value = "ex";
}
document.getElementById("x2").onclick = function()
{
    document.getElementById("x2").value = "x2";
}
document.getElementById("x3").onclick = function()
{
    document.getElementById("x3").value = "x3";
}
document.getElementById("log10").onclick = function()
{
    document.getElementById("log10").value = "log10";
}
Array.from(btn).forEach((button)=>
{
    button.addEventListener('click',(e)=>
    {

        if(e.target.innerHTML == "=")
        {   
            if(powerof(exp) == 0)
            {
            powerof(exp);
            }
            else
            {
            exp = eval(exp);
            document.querySelector("input").value = exp;
            }
        }
        else if(e.target.innerHTML == "AC")
        {
            exp = "";
            document.querySelector("input").value = exp;
        }else if(e.target.innerHTML == "Back")
        {
            exp = document.getElementById("input").value;
            exp = exp.substring(0,exp.length-1);
            document.querySelector("input").value = exp;
        }else if(e.target.value == "phi")
        {
            exp = Math.PI;
            document.querySelector("input").value = exp;
        }else if(e.target.value == "x2")
        {
            exp = document.getElementById("input").value;
            exp = exp * exp;
            document.querySelector("input").value = exp;
        }else if(e.target.value == "x3")
        {
            exp = document.getElementById("input").value;
            exp = exp * exp * exp;
            document.querySelector("input").value = exp;
        }
        else if(e.target.innerHTML == "log")
        {
            exp = document.getElementById("input").value;
            exp = Math.log(exp);
            document.getElementById("input").value = exp;
        }
        else if(e.target.innerHTML == "e")
        {
            exp = Math.E;
            document.querySelector("input").value = exp;
        }
        else if(e.target.innerHTML == "tan")
        {
            exp = document.getElementById("input").value;
            exp =  Math.tan(exp);
            document.querySelector("input").value = exp;
        }
        else if(e.target.value == "sqr")
        {
            exp = document.getElementById("input").value;
            exp =  Math.sqrt(exp);
            document.querySelector("input").value = exp;
        }
        else if(e.target.innerHTML == "cos")
        {
            exp = document.getElementById("input").value;
            exp =  Math.cos(exp);
            document.querySelector("input").value = exp;
        }
        else if(e.target.value == "x")
        {
            exp = document.getElementById("input").value;
            exp =  1/exp;
            document.querySelector("input").value = exp;
        }
        else if(e.target.innerHTML == "sin")
        {
            exp = document.getElementById("input").value;
            exp =  Math.sin(exp);
            document.querySelector("input").value = exp;
        }
        else if(e.target.value == "ex")
        {
            exp = document.getElementById("input").value;
            exp = Math.exp(exp);
            document.querySelector("input").value = exp;
        }
        else if(e.target.innerHTML == "%")
        {
            exp = document.getElementById("input").value;
            exp = exp*100;
            document.querySelector("input").value = exp;
        }
        else if(e.target.innerHTML == "x!")
        {
            exp = document.getElementById("input").value;
            exp = factorial(exp);
            document.querySelector("input").value = exp;
        }
        else if(e.target.value == "log10")
        {
            exp = document.getElementById("input").value;
            exp = Math.log10(exp);
            document.getElementById("input").value = exp;
        }
        else 
        {
        exp += e.target.innerHTML;
        document.querySelector("input").value = exp;
        }
    })
})