function RedirectTo(file){
    if(file=="php"){

        window.location="../tienda/index.php"
    }


    if(file!="php"){
        window.location=file+".html";
    }
    
}
