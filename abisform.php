
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admission Form</title>
    <link rel="stylesheet" href="">
</head>
<body>  
    <form action="results.html" method="GET"> 
        <div> 
            <label for="schoolyear">School Year</label>
            <input type="numeric" name="schoolyear">
        </div>
        <br>
        <div> 
            Grade level to Enroll
            <div required> 
                <label for ="grade11">Grade 11</label>
                <input type="radio" name="gradelevel" id="grade11" required>     
            </div>
            <div> 
                <label for ="grade12">Grade 12</label>
                <input type="radio" name="gradelevel" id="grade12" required>     
            </div>
        </div>
        <br>
        <div> 
            Check the approriate box only
            <br>
            <br>
            1. With LRN?
            <div> 
                <label for ="Ylrn">Yes</label>
                <input type="radio" name="lrn" id="Ylrn">     
            </div>
            <div> 
                <label for ="Nlrn">No</label>
                <input type="radio" name="lrn" id="Nlrn">     
            </div>
            <br>
            2. Returning (Balik-Aral)
            <div> 
                <label for ="Yreturn">Yes</label>
                <input type="radio" name="return" id="Yreturn">     
            </div>
            <div> 
                <label for ="Nreturn">No</label>
                <input type="radio" name="return" id="Nreturn">     
            </div>

        </div>
        <br>
        <div> 
            <label for="PSA">PSA Birth Certificate No. (if available upon registration)</label>
            <input type="text" name="PSA">
            <br>
            <label for="LRN">Learner Reference No. (LRN)</label>
            <input type="text" name="LRN">
        </div>
        <br>
        <div> 
            <label for="lname">Last Name</label>
            <input type="text" name="lname" id="lname"> <br>
            <label for="fname">First Name</label>
            <input type="text" name="fname" id="fname"> <br>
            <label for="mname">Middle Name</label>
            <input type="text" name="mname" id="mname"> <br>
            <label for="extname">Extension Name e.g. Jr., III (if applicable)</label>
            <input type="text" name="extname" id="extname">
        </div>
        <br>
        <div> 
            <label for="pob">Place of Birth(Municipality/City)</label>
            <textarea name="pob" id="pob"> </textarea>
        </div>
        <br>
        <div> 
            <label for="mothertongue">Mother Tongue</label>
            <input type="text" name="mothertongue" id="mothertongue">
        </div>
        <br>
        <div> 
            <label for="date">Birthdate (mm/dd/yyyy)</label>
            <br>
            <input type="date" name="date" id="date">
        </div>
        <br>
        <div>
            Sex 
            <div> 
                <label for ="male">Male</label>
                <input type="radio" name="sex" id="male">     
            </div>
            <div> 
                <label for ="female">Female</label>
                <input type="radio" name="sex" id="female">     
            </div>
            <br>
            <div> 
                <label for="age">Age</label>
                <input type="number" name="age" id="age">
            </div>
        </div>
        <br>
        <div> 
            Belonging to any Indigenous Peoples (IP) Community/Indigenous Cultural Coummnity? 
            <div> 
                <label for ="yIP">Yes</label>
                <input type="radio" name="IP" id="yIP">
                <label for ="nIP">No</label>
                <input type="radio" name="IP" id="nIP">
                <br>
                <label for="specify">If Yes, Please specify:</label>
                <input type="text" name="specify" id="specify">        
            </div>
        </div>
        <br>
        <div>
            Is your family a beneficiary of 4Ps? 
            <div> 
                <label for ="y4ps">Yes</label>
                <input type="radio" name="4Ps" id="y4Ps">
                <label for ="n4Ps">No</label>
                <input type="radio" name="4Ps" id="n4Ps">
                <br>
                <label for="idnum">If Yes, write the 4Ps Household ID Number below:</label>
                <input type="numeric" name="idnum" id="idnum">        
            </div> 
        </div>
        
        <br>
        <button>Submit</button>
        











    </form>
    

</body>
