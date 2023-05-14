const form1=document.getElementById('Add_BB1');
const name2=document.getElementById('name');
const telephone1=document.getElementById('telephone');
const house_no1=document.getElementById('house_no');
const city1=document.getElementById('city');
const street1=document.getElementById('street');
const district1=document.getElementById('district');
const province1=document.getElementById('province');
// const map=document.getElementById('map');


var valid=true;


form1.addEventListener("submit",  (e) => {
    valid=true;
    e.preventDefault();
    inputChecker();
    if(valid===true) {
        form1.submit();
    }
})




async function inputChecker() {
    //values from the inputs
    const nameVal = name2.value.trim();
    const telephone1val = telephone1.value.trim();
    const house_no1val = house_no1.value.trim();
    const city1val = city1.value.trim();
    const street1val = street1.value.trim();
    // const district1val = district1.value.trim();

    if (nameVal === "") {
        //error message
        displayError(name2, "Bank name can't be empty");        
    } else {
        //display success tick
        displaySuccess(name2);
    }


    if (telephone1val.length !== 10 ) {
        displayError(telephone1, "Enter a valid number");
    } else if (telephone1val == "") {
        displayError(telephone1, "telephone1 number can't be empty");
    } else {
        if (telephone1val.charAt(0) !== '0') {
            displayError(telephone1, "The first digit must be 0");
        } else {
            displaySuccess(telephone1);
        }
    }
    


    if (house_no1val === "") {
        displayError(house_no1, "House number can't be empty");
    }else {
        displaySuccess(house_no1);
    }


    if (city1val === "") {
        displayError(city1, "city1 can't be empty");
    } else {
        displaySuccess(city1);
    }


    if (street1val === "") {
        displayError(street1, "street1 can't be empty");
    } else {
        displaySuccess(street1);
    }


    // if (district1val === "") {
    //     displayError(district1, "district1 can't be empty");
    // } else if (!checkdistrict1(district1val)) {
    //     displayError(email, "Enter a valid name");
    // } else {
    //     displaySuccess(district1);
    // }
    
}

// function checkdistrict1(district1val) {
//     // name acn only contain letters and spaces
//     const re = /^[a-zA-Z\s]+$/;
//     if (re.test(district1val)) {
//         return true;
//     } else {
//         return false;
//     }
// }



function displayError(input, message) {
    const f = input.parentElement;
    const small = f.querySelector('small');
    
        f.className = "f error";    
    
    //add error message
    small.innerText = message;
    //add error class
    valid=false;
}

function displaySuccess(input) {
    const f = input.parentElement;
    
        f.className = "f success";    
}   