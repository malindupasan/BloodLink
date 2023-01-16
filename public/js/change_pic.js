const file = document.getElementById("file");
const fileName=document.getElementById("file_name")
const fileLabel = document.getElementById("file_label");
const changePic= document.getElementById("change_pic");
const small=document.querySelector("small");
const visible=document.getElementsByClassName("visible");
fileLabel.addEventListener("change",()=>{
    if(file.files.length!=0){
        fileName.innerText=file.files[0].name;}
    });
       
changePic.addEventListener("submit", (e) => {
        e.preventDefault();
        isValidFile(file);
        // if(valid===true) {
        //     form.submit();
        // }
    })       
function isValidFile(image) {
    if(image.files.length==0){
        small.innerHTML="File can't be empty";
        small.parentElement.className=" error";
    }else if(image.files[0].type!="image/jpeg"){
        small.innerHTML="File type is not valid";
        small.parentElement.className=" error";
    }else if(image.files[0].size>1024*1024*8){
        small.innerHTML="File exceeds maximum of 8MB";
        small.parentElement.className=" error";
    }else{
        small.parentElement.className=" visible";
        changePic.submit();
    }
}     