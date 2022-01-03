<script>
    function test(){
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open('GET', 'customer-list.php', true);
        xhr.send();
    }
</script>

<script>
    function test2(){
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open('GET', 'manage-admin.php', true);
        xhr.send();
    }
</script>

<script>
    function test3(){
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open('GET', 'manage-category.php', true);
        xhr.send();
    }
</script>

<script>
    function test4(){
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open('GET', 'manage-package.php', true);
        xhr.send();
    }
</script>

<script>
    function deleteme(id){
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open("GET", "delete.php?a=" + id, true);
        xhr.send();
    }
</script>

<script>
    function updateadmin(id){
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open("GET", "update.php?a=" + id, true);
        xhr.send();
    }
</script>

<script>
    function updateme(id){
        var name = document.getElementById("id_name").value
        var user = document.getElementById("id_username").value
        var pass = document.getElementById("id_password").value

        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open("GET", "updatesave.php?a=" + id + "&b=" + name + "&c=" + user + "&d=" + pass, true);
        xhr.send();
    }
</script>

<script>
    function login() {
        var user = document.getElementById('login_user').value
        var pass = document.getElementById('login_pass').value

        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open('GET', 'login-check.php?a=' + user + '&b=' + pass, true);
        xhr.send();
    }
</script>

<script>
    function addAdmin(){
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open('GET', 'add-admin.php', true);
        xhr.send();
    }
</script>

<script>
     function addsave(){
        var name = document.getElementById('fname').value
        var user = document.getElementById('username').value
        var pass = document.getElementById('password').value

        if(name == "" || user == "" || pass == ""){
            alert("Please fill out all the form!")
        }
        else{
            var xhr = new XMLHttpRequest();
            xhr.onload = function(){
                if(this.status == 200){
                    document.getElementById('text').innerHTML = this.responseText;
                }
            }
            xhr.open("GET", "add-save.php?a=" + name + "&b=" + user + "&c=" + pass, true);
            xhr.send();
        }
    }
</script>


<script>
    function addCategory(){
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open('GET', 'category-add.php', true);
        xhr.send();
    }
</script>

<script>
    function deleteCategory(id){
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open("GET", "deleteCategory.php?a=" + id, true);
        xhr.send();
    }
</script>


<script>
    function deletePackage(id){
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open("GET", "deletePackage.php?a=" + id, true);
        xhr.send();
    }
</script>


<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>


<script>
    function searchPackage(){
        var search = document.getElementById('search').value

        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open("GET", "search-package.php?a=" + search, true);
        xhr.send();
    }
</script>

<script>
    function test7(){
        var xhr = new XMLHttpRequest();
        xhr.onload = function(){
            if(this.status == 200){
                document.getElementById('text').innerHTML = this.responseText;
            }
        }
        xhr.open('GET', 'http://localhost/HCI/', true);
        xhr.send();
    }
</script>

