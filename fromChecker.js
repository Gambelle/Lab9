function validates() 
  let x = document.getElementById("user").value;
  let y = document.getElementById("password").value;
  let z = document.getElementsByTagName("shipping").value;
  let a = document.getElementById("avacado").value;
  let b = document.getElementById("bread").value;
  let c = document.getElementById("cocoa").value;
  let n = x.includes("@");
  let m= x.includes(".")
  if(n&&m){
    window.alert("Username must be in the form of an email address");
    return false;
  }
  if(x==null || x==""){
    window.alert("Username  field cannot be blank");
    return false;
  }
  else if(y==null || y=="") {
    window.alert("Password field cannot be blank");
    return false;
  }
  else if(a==null || a=="" || b==null || b=="" || c==null || c==""){
      window.alert("Quantities cannot be blank");
      return false;
  }
  else if(a<0 || b<0 || c<0){
    window.alert("Quantities cannot be negative (zero is fine)");
    return false;
  }
  else if(z==null){
    window.alert("Must pick a shipping option");
    return false;
  }
  else{
    document.submit();
    return true;
  }
}
