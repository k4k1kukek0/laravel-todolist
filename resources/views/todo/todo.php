task(to do list)
<!--12-->
<!--layout page (bootstrap)   = ambil link bootstrap-->

<!--resource controller =buat controller menggunakan resource-->

<!--home page -->
    <!--displays all items = ambil di bootswatch->cosmo->listgroup-->

<!--create page 
    form = (form di cosmo hanya ambil textarea dan submit button)
<<<<<<< HEAD
            textarea
            submit button-->
=======
        textarea
        submit button-->
>>>>>>> 9e25ceea24d46475c63da2ac032f4fcdcbc10f49

    <!--csrf = tambah {{csrf_field()}} di dalam <form>-->
    <!--form action = value dari form tersebut di letakkan ke store terlebih dahulu
                      method dari store yaitu POST jadi (method="POST")
                      action nya ke index (action="/todo")
    -->

<!--migration dan model = php artisan make:model Todo -m   (buat model sekalian buat migration)-->



<!--database = aktifkan database di .env file dan php artisan migrate-->

<!--<=====================================>-->

<!--13-->
<!--save data to database 
    (   
        1.use Todo;                         - ambil model nya
        2.$todo = new todo;                 - gunakan class nya 
        3.$todo->body = $request->body;     - model(todo) = nilai dari user(body)
        4.return redirect('todo');          - pergi ke todo(index)
        5.compact('todos' = todo::all();)    - kirim variable todos
    )
-->

<!--created at data with carbon = diffForHumans -->

<!--trim data(spasi) = otomatis-->

<!--validation  = validate di controller->store-->

<!--display errors = di form create-->

<!--===========================================-->

<!--14-->
<!--#ACCESSOR
- what is accessor 
    = function you will call when you get data from database and before to applying to the view
- how to define it.
    = 1.go to model Todo
      2.create function getBodyAttribute($value) 
- when to use it.
    = if many variable-->




<!--git

git config --global user.name "k4k1kukek0"
git config --global user.email "k4k1kukek0sm@gmail.com"

 (new repository)
 cd /opt/lampp/htdocs/folder/crud
 git init
 git status  
 git add .
 git commit -m "the name of folder"
 git remote add origin https:github.com/k4k1kukek0/crud-php
 git push -u origin master-->

<!--================================-->
 CRUD operation in laravel
Create
Read
Update
Delete/Destroy


#CREATE
    <!--form = (form di cosmo hanya ambil textarea dan submit button)
            textarea & input | name= "body" & "title"
            submit button-->

    <!--csrf = tambah {{csrf_field()}} di dalam <form>-->
    <!--validate kan di controller-->
    <!--rubah jadi huruf kapital awal nya dengan set(mutator) atau get(accessor)-->
    <!--form action = value dari form tersebut di letakkan ke store terlebih dahulu
                      method dari store yaitu POST jadi (method="POST")
                      action nya ke index (action="/todo")-->

#READ
    <!--form = (form home.blade.php rubah title menjadi link (a href) supaya bisa melihat semua item)
    controller = ke (show) function dan arah kan ke view tampilan dari show 
                 dan kirim data dari database menggunakan compact
    bikin tampilan form (show) nya tampilkan semua item-->

#UPDATE
    

