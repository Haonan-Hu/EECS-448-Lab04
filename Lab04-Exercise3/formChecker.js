function checkInput()
{
  if(quantityChecker() && usernameChecker() && passwordChecker() && shippingChecker())
  {
    alert("231");
    return;
  }
  else
  {
    event.preventDefault();
  }
}




function quantityChecker()
{
  let stdQ = document.getElementById('stdNum').value;
  let dexQ = document.getElementById('deluexNum').value;
  let collectorQ = document.getElementById('collectorNum').value;


  if(isNaN(stdQ) || isNaN(dexQ) || isNaN(collectorQ))
  {
    alert("Please type in number");
    return false;
  }
  if(stdQ.includes(" ") || dexQ.includes(" ") ||collectorQ.includes(" "))
  {
    alert("No spaces in between");
    return false;
  }
  if(stdQ.length < 1 || dexQ.length < 1 || collectorQ.length < 1)
  {
    alert("Please type in a value");
    return false;
  }
  if(!Number.isInteger(Number(stdQ)) || !Number.isInteger(Number(dexQ)) || !Number.isInteger(Number(collectorQ)))
  {
    alert("Please type in number");
    return false;
  }
  return true;
}

function usernameChecker()
{
  let username = document.getElementById('user').value;
  if(/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(username))
  {
    return true;
  }
  alert("Should be an email address");
  return false;
}

function passwordChecker()
{
  let password = document.getElementById('pass').value;
  if(password.length < 1)
  {
    alert("At least type in something");
    return false;
  }
  return true;
}

function shippingChecker()
{
  let ship = document.getElementsByName('choice').value;
  if(ship.length < 1)
  {
    alert("Choose an shipping option");
    return false;
  }
  return true;
}

function clean()
{
  document.getElementById('stdNum').value = "";
  document.getElementById('deluexNum').value = "";
  document.getElementById('collectorNum').value = "";
  document.getElementById('user').value = "";
  document.getElementById('pass').value = "";
  document.getElementsByName('choice').checked = false;
}
