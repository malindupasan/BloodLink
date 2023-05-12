const form = document.getElementById('campreqform');
const name1 = document.getElementById('cName');
const city = document.getElementById('city');
const houseno = document.getElementById('houseno');
const street = document.getElementById('street');
const phone = document.getElementById('phone');
const date = document.getElementById('date');
const lat = document.getElementById('p-latitude');
const lng = document.getElementById('p-longitude');

var valid = true;

console.log("message");


form.addEventListener("submit", (e) => {
    valid = true;

    e.preventDefault();
    inputChecker();
    if (valid === true) {
        form.submit();
    }
})


async function inputChecker() {
    //values from the inputs
    // console.log("inputChecker");
    const nameVal = name1.value.trim();

    const cityVal = city.value.trim();

    const housenoVal = houseno.value.trim();
    const streetVal = street.value.trim();
    const phoneVal = phone.value.trim();
    const dateVal = date.value.trim();
    const latVal = lat.value.trim();
    const lngVal = lng.value.trim();

    if (nameVal === "") {
        //error message
        displayError(name1, "Camp name can't be empty");

    } else {
        //display success tick
        displaySuccess(name1);
    }
    if (cityVal === "") {
        //error message
        displayError(city, "City can't be empty");

    } else {
        //display success tick
        displaySuccess(city);
    }
    if (housenoVal === "") {
        //error message
        displayError(houseno, "House No name can't be empty");

    } else {
        //display success tick
        displaySuccess(houseno);
    }
    if (streetVal === "") {
        //error message
        displayError(street, "Street name can't be empty");

    } else {
        //display success tick
        displaySuccess(street);
    }
    if (phoneVal === "") {
        //error message
        displayError(phone, "Phone No name can't be empty");

    } else {
        //display success tick
        displaySuccess(phone);
    }
    if (dateVal === "") {
        //error message
        displayError(date, "Date name can't be empty");

    } else {
        //display success tick
        displaySuccess(date);
    }
    if ( latVal=== "") {
        //error message
        displayError(lat, "Select a location on the map ");

    } else {
        //display success tick
        displaySuccess(lat);
    }
    if ( lngVal=== "") {
        //error message
        displayError(lng, "Select a valid location on the map");

    } else {
        //display success tick
        displaySuccess(lng);
    }



}
function displayError(input, message) {
    const f = input.parentElement;
    // console.log("message");
    const small = f.querySelector('small');

    f.className = "f error";


    //add error message
    small.innerText = message;
    //add error class
    valid = false;
}
function displaySuccess(input) {
    const f = input.parentElement;

    f.className = "f success";



}




function initAutocomplete() {
    let srilanka = { lat: 7.8731, lng: 80.7718 };
    // The location of Uluru

    // The map, centered at Uluru
    var map = new google.maps.Map(document.getElementById("map"), {
        zoom: 8,
        center: srilanka,
        mapTypeControl: false,


    });


    var input = document.getElementById("locationInp"); //r
    map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);//r

    var autocomplete = new google.maps.places.Autocomplete(input); //r
    var marker = new google.maps.Marker({
        draggable: true,//false

        map: map
    });
    marker.setPosition(srilanka); //change
    marker.setVisible(true); //after
    autocomplete.bindTo("bounds", map);
    autocomplete.setFields(['address_components', 'geometry', 'name'])
    autocomplete.addListener('place_changed', function () {
        // marker.setVisible(false);
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
        }

        // If the place has a geometry, then present it on a map.
        if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
        } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
        }
        marker.setPosition(place.geometry.location);
        marker.setVisible(true);
    });
    google.maps.event.addListener(marker, 'position_changed',
        function () {
            document.getElementById('p-latitude').value = marker.position.lat();
            document.getElementById('p-longitude').value = marker.position.lng();
        }
    )

}
//here

document.addEventListener("DOMContentLoaded", function (event) { initAutocomplete() });