const btn = document.getElementById("button");
const exp = document.getElementById("exp");

btn.addEventListener("click", () => {
   fetch('expression.txt')
      .then(response => response.text())
      .then(response => {
         exp.textContent = response;
         document.body.append(exp) 
      })
      .catch(error => console.log("error"));
})
