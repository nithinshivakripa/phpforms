function displaynum(n1){
  calculator.text1.value=calculator.text1.value+n1;
}
function back() {
    var value = document.getElementById("myInput").value;
    document.getElementById("myInput").value = value.substr(0, value.length - 1);
}
function all_clear(){
  document.getElementById('myInput').value=''
}
