document.getElementById('addForm').addEventListener('submit', function(){
    let name = document.getElementById('name').value.trim();
    if(name.length === 0){
        alert("Please enter a name!");
    }
});
