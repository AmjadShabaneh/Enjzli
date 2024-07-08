    <style>
                            /*  Menu  */
#menu{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: space-between;
    width: 100%;
}

#landmark{
    font-family: 'Avenir Black';
    font-size: 32px;
    margin: 32px;

}
                        /*  Menu / Profile  */
#profile{
    display: flex;
    flex-direction: row;
    line-height: 20px;
    align-items: center;
    margin: 32px;
}

#pic{
    width: 56px;
    height: 56px;
    border-radius: 150px;
    background-position: center;
    background-size:cover;
    background-repeat: no-repeat;
    background-image: url("../../img/Fares.jpg");
    margin-left: 8px;
}

#name{
    color: white;
    font-family: 'avenir regular';
    font-size: 16px;
    
}

#logout{
    color: white;
    font-family: 'avenir regular';
    opacity: 0.4;
    font-size: 16px;
}

#logout:hover { 
    opacity: 0.5; 
}
    </style>
    
    
    
    <div id="menu">
        <div id="profile">
            <div id="pic"></div>
            <div id="info">
                <span id="name">فارس احمد العملة</span><br>
                <a href="log-in"><span id="logout">تسجيل الخروج</span></a>
            </div>
        </div>
        <div id="landmark"><span >HeroFit</span></div>
    </div>