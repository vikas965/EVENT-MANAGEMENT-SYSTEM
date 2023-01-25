<?php

    if($_SERVER['REQUEST_METHOD'] == "GET")
    {
        $conn  = mysqli_connect('localhost','root','','final') or die('connection error :' . mysqli_connect_error());
        $data = mysqli_query($conn,"SELECT * FROM eventdetails");
        foreach($data as $item)
        {
            if($_GET['term'] == $item['sr-no'])
            {
                $id = $_GET['term'];
                echo "         <form action='main7.php?term=$id' method ='GET' enctype='multipart/form-data'>
                <div class='formcontainer'>
                    <div class='formcontrol'>
                        <label for='Description'></label>
                        Description:<br>
                        <textarea rows='10' cols='40' name='Description' id='description' type='text' required>
                        </textarea>
                    </div>
<br>
                    <div class='formcontrol'>
                      <label for='upload'>Upload the Event Poster</label>
                      <input value='
                      id='upload' name='upload'  type='file' required>
                  </div>
<br>
    <div class='formcontrol'>
      <label for='date'>Date</label>
      <input value='
      id='date' name='date' placeholder=' type='date' required>
    </div>
      <div class='formcontrol'>
        <label for='time'>Time</label>
        <input value='
        id='time' name='time' placeholder=' type='time' required>

  </div>
<div class='formcontrol'>
  <label for='Venue'>Venue</label>
  <input value='
  id='Venue' name='Venue' placeholder=' type='text' required>
</div>
<div class='formcontrol'>
  <label for='mode'>Mode of Event</label>
  <input value='
  id='mode' name='mode' placeholder=' type='text' required>
 </div>
 <div class='formcontrol'>
<label for='Category'>Choose a category</label>
<select name='Category' id='category' required>
  
  <option label='Competition'></option>
  <option label='Webinars'></option>
  <option label='Seminars'></option>
  <option label='Workshops'></option>
  <option label='Meetups'></option>
  <option label='Fests'></option>
</select>
 </div>
 <div class='formcontrol'>
  <label for='SpeakersInfo'>Speakers Info</label>
  <input value='
  id='SpeakersInfo' name='speakerinfo' placeholder=' type='text' required>
 </div>
 <div class='formcontrol'>
  <label for='Winners'>Winners</label>
  <input value='
  id='Winners' name='Winners' placeholder=' type='text' required>
 </div>
 <div class='formcontrol'>
  <label for='Runners'>Runners</label>
  <input value='id='Runners' name='Runners' placeholder=' type='text' required>
 </div>
 <div class='formcontrol'>
  <label for='Organizers'>Organizers</label>
  <input value='id='Organizers' name='Organizers' placeholder=' type='text' required>
 </div>
 <div class='formcontrol'>
  <label for='PrizesInfo'>PrizesInfo</label>
  <input value='
  id='PrizesInfo' name='PrizesInfo' placeholder=' type='text' required>
 </div>

                   
                <div class='buttoncontainer'>
                    <button type='submit'>
                            Submit now
                    </button>
                </div>
            </form>
        </div>
    </div>
    <style>
        *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    background-color:#ccc;
}
.container{

    max-width: 900px;
    margin: 0 auto;

}

.applybox{
    max-width: 600px;
    padding: 20px  ;
    background: white;
    margin: 0 auto;
    margin-top: 50px;
    box-shadow: 4px 3px 5px rgb(1,1,1,0.3);
    border-radius: 10px;
}
.titlesmall{
    font-size: 20px;
}

.formcontainer{

    margin-top: 25px;
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(200px,1fr));
    gap: 20px;

}

.formcontrol{
    display: flex;
    flex-direction:column;
}

label{
    font-size: 20px;
    margin-bottom: 10px;
}

input , select ,textarea{
    padding: 6px 10px;
    border: 1px solid grey;
    border-radius: 5px;
    font-size: 17px;

}

input:focus{
    outline-color: orangered;
}

.buttoncontainer{
    display: flex;
    justify-content: flex-end;
    margin: 20px;
}

button{
    background-color: blue;
    color: white;
    border: transparent solid 2px;
    padding: 5px 10px;
    border-radius: 10px;
    transition: 0.4s ease-in;
}

button:hover{
    cursor: pointer;
    background-color: lightskyblue;
    border: 2px solid blue;
    transition: 0.4s ease-out;
}

.textarea{
    grid-column: 1/span 2;
}
.textarea textarea{
    width: 100%;
}

@media (max-width:460px){
    .textarea{
        grid-column: 1/span 1;
    }
}
    </style>";
            }
        }

    }