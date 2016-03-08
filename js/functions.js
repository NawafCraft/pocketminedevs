function showHide(id,btn){
    if(id.style.display == 'none'){
     originalText = btn.value;
     btn.value = 'Hide Panel';
     id.style.display = 'block';
    } else if(id.style.display == 'block'){
      btn.value = originalText;
      id.style.display = 'none';
    }
}
