@extends('layout.main')
@extends('layout.master2')
@section('title', 'الملاحظات | هيرو فت')
@section('content')

<link rel="stylesheet" href="{{asset('../css/user/note.css?v=').time()}}">
    <div class="main-content notes-page">
        <div class="container">

            <div id="notes-form">
                <span id="form-header">اضافة ملاحظة</span>
                <form action="{{route('club.store_note')}}" id="form" method='POST'>
                    @csrf
                    <div class="form-div">
                        <label for="title1" class="form-labels">العنوان</label>
                        <input type="text" name="title" id="title1" class="form-inputs">
                    </div>

                    <div class="form-div">
                        <label for="sub-title1" class="form-labels">المحتوى</label>
                        <textarea name="content" id="sub-title" cols="auto" rows="5" class="form-inputs"></textarea>
                    </div>

                    <button id="form-button" type='submit'>أضف الملاحظة</button>
                </form>
            </div>
            <div id="overlay2" onclick="hideForm()"></div>

            <span class="page-header">الملاحظات</span>
            <div class="notes">
                <div class="notes-group">
                    @foreach ($notes as $note)
                    <div class="note" id="note">
                        
                            
                         <div class="delete-note" >
                           <form action="{{ route('club.delete_note', ['id' => $note->id]) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button style='background-color: initial;border: none;cursor:pointer;margin-top:10px'><img class="trash" src="../../img/Trash.png"></button>
                       </form> 
                        </div> 
                        <input type="text"  placeholder="العنوان" value='{{$note->title}}' disabled>
                        <textarea name="desc" id="desc" class="desc"  placeholder="المحتوى ">{{$note->content}}</textarea>
                    </div>
                    @endforeach
                    <div class="add-note" draggable="true" onclick="showForm()"> <!-- onclick="addNote(notesContainer)" -->
                        <label for="">إضافة ملاحظة جديدة</label>
                        <img src="../../img/Plus.svg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
       // function deleteNote(){
       //     const note = this.parentElement;
       //     note.remove();
       // };
//
       // function addNote(parentElement){
       //     const noteDiv = document.createElement('div');
       //     noteDiv.classList.add('note');
       //     noteDiv.id = 'note';
//
       //     const deleteNoteDiv = document.createElement('div');
       //     deleteNoteDiv.classList.add('delete-note');
       //     deleteNoteDiv.onclick = deleteNote;
//
       //     const trashImg = document.createElement('img');
       //     trashImg.classList.add('trash');
       //     trashImg.src = '../../img/Trash.png';
//
       //     deleteNoteDiv.appendChild(trashImg);
//
       //     noteDiv.appendChild(deleteNoteDiv);
//
       //     const inputElement = document.createElement('input');
       //     inputElement.type = 'text';
       //     inputElement.placeholder = 'العنوان';
//
       //     noteDiv.appendChild(inputElement);
//
       //     const textareaElement = document.createElement('textarea');
       //     textareaElement.name = 'desc';
       //     textareaElement.id = 'desc';
       //     textareaElement.classList.add('desc');
       //     textareaElement.placeholder = 'المحتوى ';
//
       //     noteDiv.appendChild(textareaElement);
//
       //     parentElement.insertBefore(noteDiv, parentElement.querySelector('.add-note'));
//
       //     notesGroup.removeChild(addNoteDiv);
       //     notesGroup.appendChild(addNoteDiv);
       // }
//
       // const notesContainer = document.querySelector('.notes-group');
       // addNote(notesContainer);
//
       // const notesGroup = document.querySelector('.notes-group');
       // const addNoteDiv = notesGroup.querySelector('.add-note');
//
       // // Remove the add-note div from its current position
       // notesGroup.removeChild(addNoteDiv);
//
       // // Add the add-note div to the end of the notes-group
       // notesGroup.appendChild(addNoteDiv);


        const form = document.getElementById('notes-form');
        const overlay2 = document.getElementById('overlay2');

        function showForm(){
            const form = document.getElementById('notes-form');
            const overlay2 = document.getElementById('overlay2');

            form.style.display = "block";
            overlay2.style.display = "block";
        }

        function hideForm(){
            const form = document.getElementById('notes-form');
            const overlay2 = document.getElementById('overlay2');

            form.style.display = "none";
            overlay2.style.display = "none";
        }

    </script>
@endsection