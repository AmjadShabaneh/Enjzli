@extends('layout.main')
@extends('layout.master2')
@section('title', 'ادارة المشتركين | هيرو فت')
@section('content')
<link rel="stylesheet" href="{{asset('../css/user/coustmers.css?v=').time()}}">

<div id="BlackBox" onclick="hideModel()"></div>
<div class="main-content">
    <div class="container">
        <div class="main">
                    
            <div id="GymInfo">
                <div class="strip">
                    <button class="strip-btn trash" onclick="showDelete()"><img src="../../img/trash.svg" alt=""></button>
                    <button class="strip-btn edit" id="edit" onclick="edit()"><img src="../../img/edit.svg" alt=""></button>
                </div>
                
                <div id="delete-div">
                    <span id="delete-header">هل أنت متأكد انك تريد حذف المشترك؟</span>
                    <div id="delete-buttons">
                        <button id="delete">حذف</button>
                        <button id="cancel-delete" type="button" onclick="hideDelete()">الغاء</button>
                    </div>
                </div>


                <form action="{{route('club.update_customer')}}" method='POST' style="width:100%;height:100%;">
                
                @csrf
                @method('PUT')
                <input type="hidden" name="id" id='c_id'>
                    <div class="SubPhoto">
                        <div id="MiniPic"><input type="file" name="ProfilePic" id="ProfilePic" disabled></div>
                        <span class="SubDate" style="opacity: 0.5">تاريخ التسجيل <span class="SubDate">24/5/2024</span></span>
                    </div>
                    <div class="main-form">
                        <div class="submain-form sm-div">
                            <div class="main-div-input">
                                <div class="sm-div-input">
                                    <label for="FirstName"> الاسم </label><br>
                                    <input type="text" disabled id="FirstName" name="name" class="sub-input sm" placeholder="[FirstName]">
                                </div>

                                <div class="sm-div-input">
                                    <label for="trainer_name">اسم المدرب</label><br>
                                    <input type="text" disabled id="trainer_name" name="trainer_name" class="sub-input sm" placeholder="trainer name">
                                </div>
                            </div>

                            <div class="main-div-input" style="width:100%;">
                                <div class="sm-div-input">
                                    <label for="date"> تاريخ الميلاد </label><br>
                                    <input type="date" disabled id="date" name="birth_date" class="sub-input sm" placeholder="[date]">
                                </div>

                                <div class="sm-div-input">
                                    <label for="gender">الجنس</label><br>
                                    <select id="gender" disabled name="gender" class="sub-input sm" placeholder="[gender]">
                                        <option value=""></option>
                                        <option value="true">ذكر</option>
                                        <option value="false">انثى</option>
                                    </select>
                                </div>
                            </div>

                            <div class="main-div-input">
                                <div class="sm-div-input">
                                    <label for="height">الطول (سم)</label><br>
                                    <input type="number" disabled id="height" name="height" class="sub-input sm" placeholder="[height]">
                                </div>

                                <div class="sm-div-input">
                                    <label for="weight">الوزن (كغم)</label><br>
                                    <input type="number" disabled id="weight" name="weight" class="sub-input sm" placeholder="[weight]">
                                </div>
                            </div>
                        </div>

                        <hr style="border: 1px solid rgba(var(--clr-text), 0.2); height:80%">

                        <div class="submain-form lg-div">
                            <div class="lg-div-input">
                                <label for="phone">رقم الهاتف</label><br>
                                <input type="text" disabled name="phone" id="phone" class="sub-input lg" placeholder="phone">
                            </div>

                            <div class="lg-div-input">
                                <label for="email">البريد الالكتروني</label><br>
                                <input type="email" disabled name="email" id="email" class="sub-input lg" placeholder="[email]">
                            </div>
                            <div class="lg-div-input">
                                <label for="notes"> الملاحظات </label><br>
                                <input type="text" disabled name="notes" id="notes" class="sub-input lg" placeholder="ملاحظات">
                            </div>
                            
                        </div>
                    </div>
                    <div id="form-buttons">
                        <button type='submit' id="form-save-button">حفظ</button>
                        <button id="form-unsave-button" type="button" onclick="unsave()">الغاء</button>
                    </div>
                </form>
            </div>

        <div id="Main">
            <div id="InfoDiv">
                <div id="Coustmers">
                    <div class="table-container">
                        <table id="myTable">
                            <thead>
                                <tr class="head-1">
                                    <th id="GymName" data-index="0">الاسم</th>
                                    <th class="Sm" data-index="1">تاريخ التسجيل</th>
                                    <th id="DateEnd" data-index="2">متبقي لانتهاء الاشتراك</th>
                                    <th class="Sm" data-index="3">الجنس</th>
                                    <th class="Sm" data-index="4">اسم المدرب</th>
                                    <th class="Sm" data-index="5">ملاحظات</th>
                                    <th class="Sm" data-index="6">البرامج</th>
                                </tr>
                            </thead>
                            
                            
                          <!--  <tr class="info" onclick="showModel()">
                                <td class="name"><div class="ProPic" style="background-color:#1D5B79"></div><div class="name">محمد احمد</div></td>
                                <td data-cell="تاريخ التسجيل" class="attr">26/03/2022</td>
                                <td data-cell="متبقي لانتهاء الاشتراك" class="attr">24 يوم</td>
                                <td data-cell="الجنس" class="attr">ذكر</td>
                                <td data-cell="الموقع" class="attr">الأردن</td>
                                <td data-cell="ملاحظات" class="attr"></td>
                                <td data-cell="البرامج" class="attr"><a href="programs" class="program-link"><img src="../../img/sidebar/Programs.png" alt="" width="40px"></a></td>
                            </tr>-->
                            @foreach($customers as $c)
                            <tr class="info" onclick="showModel({{$c}})">
                                <td class="name"><div class="ProPic" style="background-color:#1D5B79"></div><div class="name"> {{$c->name}} </div></td>
                                <td data-cell="تاريخ التسجيل" class="attr">{{$c->join_date}}</td>
                                <td data-cell="متبقي لانتهاء الاشتراك" class="attr">
                                 {{ $c->days_left >= 0 ?$c->days_left.' يوم '  : 'منتهي' }}
                                </td>
                                <td data-cell="الجنس" class="attr">
                                    @if($c->gender)
                                    {{'ذكر'}}
                                    @else
                                    {{'انثى'}}
                                    @endif
                                </td>
                                <td data-cell="الموقع" class="attr">{{$c->trainer_name}}</td>
                                <td data-cell="ملاحظات" class="attr">{{$c->notes}}</td>
                                <td data-cell="البرامج" class="attr"><a href="{{route('club.programs',['id'=>$c->id])}}" class="program-link"><img src="../../img/sidebar/Programs.png" alt="" width="40px"></a></td>
                            </tr>
                            @endforeach

                            
                        </table>
                    </div>
                </div>
            </div>
            <div id="SidePhoto">
                <div id="TopBar">
                    <div class="search-div">
                        <span id="Header">إدارة النوادي</span>
                        <div id="Search">
                            <img src="../img/search.svg" alt="" id="SearchIcon">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="ابحث عن طريق الإسم">
                        </div>
                    </div>
                        <a href="{{route('club.customer_index')}}"><button class="add-coustmer" onclick="">اضافة مشترك جديد</button></a>
                </div>
            </div>
        </div>
    </div>

    <script>
        function myFunction() {
            // Declare variables
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
                }
            }
        }

        function showModel(customer) {
    document.querySelector('#BlackBox').style.display = 'block';
    document.querySelector('#GymInfo').style.display = 'block';

    // Enable the input fields
   
    document.querySelector('#c_id').value = customer.id;

    document.querySelector('#FirstName').value = customer.name;
    document.querySelector('#trainer_name').value = customer.trainer_name;
    document.querySelector('#date').value = customer.birth_date;
    document.querySelector('#gender').value = customer.gender ? 'true' : 'false';
    document.querySelector('#height').value = customer.height;
    document.querySelector('#phone').value = customer.phone;
    document.querySelector('#email').value = customer.email;
    document.querySelector('#notes').value = customer.notes;
    if (customer.weights.length > 0) {
        document.querySelector('#weight').value = customer.weights[0].weight;
    } else {
        document.querySelector('#weight').value = '';
    }

   
}

        function hideModel() {
            document.querySelector('#BlackBox').style.display = 'none';
            document.querySelector('#GymInfo').style.display = 'none';

            inputs.forEach((input) => {
                input.disabled = true;
            });

            selects.forEach((select) => {
                select.disabled = true;
            });
                
            buttons.style.display = "none";
        }

        function showDelete(){
            document.getElementById('delete-div').style.display = 'flex';
        }

        function hideDelete(){
            document.getElementById('delete-div').style.display = 'none';
        }




        const table = document.getElementById('myTable');
        const headers = table.querySelectorAll('th');

        headers.forEach((header, index) => {
        header.addEventListener('click', () => {
            const isAscending = header.getAttribute('data-order') !== 'asc';
            header.setAttribute('data-order', isAscending ? 'asc' : 'desc');
            sortTable(index, isAscending);
        });
        });

        function sortTable(columnIndex, isAscending) {
        const tableBody = table.querySelector('tbody');
        const rows = Array.from(tableBody.rows);

        rows.sort((rowA, rowB) => {
            const cellA = rowA.cells[columnIndex].innerText;
            const cellB = rowB.cells[columnIndex].innerText;

            if (isAscending) {
            return cellA.localeCompare(cellB);
            } else {
            return cellB.localeCompare(cellA);
            }
        });

        const sortedRows = rows;
        tableBody.innerHTML = '';
        tableBody.append(...sortedRows);
        }

            const button = document.getElementById('edit'); 
            const inputs = document.querySelectorAll('input');
            const selects = document.querySelectorAll('select');
            const buttons = document.getElementById('form-buttons');

            function edit(){
                inputs.forEach((input) => {
                    input.disabled = false;
                });

                selects.forEach((select) => {
                    select.disabled = false;
                });
                
                buttons.style.display = "flex";
            }

            function unsave(){
                inputs.forEach((input) => {
                    input.disabled = true;
                });

                selects.forEach((select) => {
                    select.disabled = true;
                });
                
                buttons.style.display = "none";
            }

        </script>
        </div>
    </div>
@endsection