@extends('layout.main')
@extends('layout.master')
@section('title', 'Management - HeroFit Admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('../css/admin/management.css?v=').time()}}">

</head>
<body dir="rtl">
    
    <div id="Container">
        <div id="menu">
            <div id="profile">
                <div id="pic" style='background-image:url({{$admin->photo}})'></div>
                <div id="info">
                    <span id="name">{{$admin->name}}</span><br>
                    <form action='{{route("admin.logout")}}' method='post' style='background-color: initial;;border:none'>
                    @csrf
                        <span style='background-color: initial;;border:none'><button id='logout' style='background-color: initial;;border:none'>تسجيل الخروج</button></span>
                    </form>
                </div>
            </div>
            <div id="landmark"><span >HeroFit</span></div>
        </div>

        
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
                            <span id="delete-header">هل أنت متأكد أنك تريد حذف المشترك؟</span>
                            <div id="delete-buttons">
                                <button id="delete">حذف</button>
                                <button id="cancel-delete" type="button" onclick="hideDelete()">الغاء</button>
                            </div>
                        </div>
        
        
                        <form action="{{route('admin.update_club')}}" style="width:100%;height:100%;" method='POST' enctype="multipart/form-data">

                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" id='id' value='id'>
                            <div class="SubPhoto">
                                <div id="MiniPic"><input type="file" name="ProfilePic" id="ProfilePic" disabled></div>
                                <span class="SubDate" style="opacity: 0.5">تاريخ التسجيل <span class="SubDate">24/5/2024</span></span>
                            </div>
                            <div class="main-form">
                                <div class="submain-form sm-div">
                                    <div class="main-div-input">
                                        <div class="lg-div-input">
                                            <label for="phone">رقم الهاتف (النادي)</label><br>
                                            <input type="tel" disabled id="Phone" name="phone" class="sub-input sm" placeholder="[Phone]">
                                        </div>
                                    </div>
        
                                    <div class="main-div-input" style="width:100%;">
                                        <div class="sm-div-input">
                                            <label for="gender">الدولة</label><br>
                                            <select id="gender" disabled name="country" class="sub-input sm" placeholder="[gender]">
                                                <option value=""></option>
                                                @foreach($countries as $c2)
                                                <option value="{{$c2->id}}">{{$c2->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="sm-div-input">
                                            <label for="address">العنوان</label><br>
                                            <input type="text" disabled id="address" name="address" class="sub-input sm" placeholder="[address]">
                                        </div>
                                    </div>
        
                                    <div class="main-div-input">
                                        <div class="lg-div-input">
                                            <label for="height">الباقة</label><br>
                                            <select name="plan" id="plan" class="sub-input lg" title="يجب اختيار الباقة" required disabled>
                                                <option value=""></option>
                                                <option value="Standard">الاساسية - 159 شيكل</option>
                                                <option value="Bussines">الاعمال - 169 شيكل</option>
                                                <option value="Gold">الذهبية - 219 شيكل</option>
                                            </select><br>
                                        </div>
                                    </div>
                                </div>
        
        
                                <div class="submain-form lg-div">
                                    <div class="lg-div-input">
                                        <label for="username">إسم النادي</label><br>
                                        <input type="text" disabled name="name" id="username" class="sub-input lg" placeholder="[username]">
                                    </div>
        
                                    <div class="lg-div-input">
                                        <label for="email">البريد الإلكتروني (النادي)</label><br>
                                        <input type="email" disabled name="email" id="email" class="sub-input lg" placeholder="[email]">
                                    </div>
        
                                    <div class="lg-div-input">
                                        <label for="password">كلمة المرور (النادي)</label><br>
                                        <input type="password" disabled name="password" id="password" class="sub-input lg" placeholder="[password]">
                                    </div>
                                </div>

                                <div class="submain-form lg-div">
                                    <div class="lg-div-input">
                                        <label for="username">إسم المالك</label><br>
                                        <input type="text" disabled name="owner_name" id="owner_name" class="sub-input lg" placeholder="[username]">
                                    </div>
        
                                    <div class="lg-div-input">
                                        <label for="email">البريد الإلكتروني (المالك)</label><br>
                                        <input type="email" disabled name="owner_email" id="owner_email" class="sub-input lg" placeholder="[email]">
                                    </div>
        
                                    <div class="lg-div-input">
                                        <label for="password">رقم الهاتف (المالك)</label><br>
                                        <input type="text" disabled name="owner_phone" id="owner_phone" class="sub-input lg" placeholder="[password]">
                                    </div>
                                </div>
                            </div>

                            <div id="form-buttons">
                                <button id="form-save-button">حفظ</button>
                                <button id="form-unsave-button" type="button" onclick="unsave()">الغاء</button>
                            </div>
                        </form>
                    </div>
        
                <div id="Main">
                    <div id="InfoDiv">
                        <div id="Coustmers" >
                            <div class="table-container">
                                <table id="myTable">
                                    <thead>
                                        <tr class="head-1">
                                            <th id="GymName" data-index="0">إسم النادي</th>
                                            <th class="Sm" data-index="1"> الدولة </th>
                                            <th id="DateEnd" data-index="2">متبقي لانتهاء الإشتراك</th>
                                            <th class="Sm" data-index="4">العنوان</th>
                                            <th class="Sm" data-index="5">إسم المالك</th>
                                        </tr>
                                    </thead>
                                    
                                    <!--<tr class="info" onclick="showModel()">
                                        <td class="name"><div class="ProPic" style="background-color:#1D5B79"></div><div class="name">محمد احمد</div></td>
                                        <td data-cell="تاريخ التسجيل" class="attr">26/03/2022</td>
                                        <td data-cell="متبقي لانتهاء الاشتراك" class="attr">24 يوم</td>
                                        <td data-cell="الموقع" class="attr">الاردن</td>
                                        <td data-cell="ملاحظات" class="attr">عبدالله</td>
                                    </tr>-->
        
                                    @foreach($clubs as $c)
                                    <tr class="info" onclick="showModel({{$c}})">
                                        <td class="name" style=''><div class="ProPic" style="background-image:url({{$c->photo}})"></div><div class="name" style='padding:20px;' >{{$c->name}}</div></td>
                                        <td data-cell="تاريخ التسجيل" class="attr" >{{$c->country->name}}</td>
                                        <td data-cell="متبقي لانتهاء الاشتراك" class="attr"> {{ $c->days_left >= 0 ?$c->days_left.' يوم '  : 'منتهي' }}</td>
                                        <td data-cell="الموقع" class="attr">{{$c->address}}</td>
                                        <td data-cell="ملاحظات" class="attr">{{$c->owner->name}}</td>
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
                                    <input type="text" id="myInput" onkeyup="myFunction()" placeholder="ابحث عن طريق الاسم">
                                </div>
                            </div>
                        </div>
                        <img src="../../img/Arrow.svg" alt="" onclick="history.back()" style="cursor: pointer">
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
        
                function showModel(c) {
    
    document.querySelector('#BlackBox').style.display = 'block';
    document.querySelector('#GymInfo').style.display = 'block';

    // Setting values to the form inputs
    document.querySelector('#id').value = c.id;
    document.querySelector('#Phone').value = c.phone;
    document.querySelector('#gender').value = c.country_id;
    document.querySelector('#address').value = c.address;
    document.querySelector('#plan').value = c.subscription.type;
    document.querySelector('#username').value = c.name;
    document.querySelector('#email').value = c.email;

    // Setting values for the owner
    if (c.owner) {
        document.querySelector('#owner_name').value = c.owner.name;
        document.querySelector('#owner_email').value = c.owner.email;
        document.querySelector('#owner_phone').value = c.owner.phone;
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
</body>
</html>