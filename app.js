
// burada tasarımda olan buttonun idsi ile ulaşıyoruz id aşağıda olduğu gibi tek tırnak içinde başında kare olacak şekilde yazılır
const singin =document.querySelector('#signin');
const signup =document.querySelector('#signup');

const deneme = async() => {

let email = document.getElementById("signinemail").value
let password = document.getElementById("signinpassword").value


// bilgiyi çekeceğimiz url gelecek örenek= 'http://localhost:8080/lead/getleads' şeklinde
let response = await fetch('url gelecek')
// bilgiyi çekeceğimiz url gelecek örenek= 'http://localhost:8080/lead/getleads' şeklinde
let response2 =await fetch(' url gelecek',{
    method:'POST',
    headers:{
        'Accept': 'application/json',
        'Content_Type': 'application/json'
    },
    body: JSON.stringify({
        email:email,
        password:password
    })
})

console.log(response2);
console.log(response)

}

const saveLead = async() => {

    let signupname = document.getElementById("signupname").value
    let signupsurname = document.getElementById("signupsurname").value
    let signupemail = document.getElementById("signupemail").value
    let signuppassword = document.getElementById("signuppassword").value
    
    // kullanıcı kayıdı için gerekli urlgirilecek örenek= 'http://localhost:8080/lead/getleads' şeklinde
    let response =await fetch(' url gelecek',{
        method:'POST',
        headers:{
            'Accept': 'application/json',
            'Content_Type': 'application/json'
        },
        body: JSON.stringify({
            name:signupname,
            surname:signupsurname,
            email:signupemail,
            password:signuppassword
            
        })
    })
    
    
    console.log(response)
    
    }


signup.addEventListener('click',saveLead);