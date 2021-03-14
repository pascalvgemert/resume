function readTextFile(file)
{
    var rawFile = new XMLHttpRequest();
    var allText = ''
    rawFile.open("GET", file, false);
    rawFile.onreadystatechange = function ()
    {
        if(rawFile.readyState === 4)
        {
            if(rawFile.status === 200 || rawFile.status == 0)
            {
                allText = rawFile.responseText;
                console.log(allText);
                
            }
        }
    }
    rawFile.send(null);
    // return rawFile
    return allText;
}

function readEducationCSV(csvText)
{
    var data = $.csv.toObjects(csvText);
    console.log(data);
    for(const object in data){
        var topDiv = document.createElement('div');
        topDiv.setAttribute('class','experience row')

        var universityDiv = document.createElement('div')
        universityDiv.setAttribute('class','col-md-4')

        var universityName = document.createElement('h4')
        var universityNameText = document.createTextNode(`${data[object]['UniversityName']}`)
        universityName.appendChild(universityNameText)

        var universityPeriod = document.createElement('p')
        universityPeriod.setAttribute('class','experience-period')
        var universityPeriodText = document.createTextNode(`${data[object]['UniversityDuration']}`)
        universityPeriod.appendChild(universityPeriodText)
        
        universityDiv.appendChild(universityName)
        universityDiv.appendChild(universityPeriod)
        
        var courseDiv = document.createElement('div')
        courseDiv.setAttribute('class','col-md-8')

        var courseInfo = document.createElement('p')
        var courseName = document.createElement('strong')
        courseName.textContent = `${data[object]['CourseName']}`
        var courseDesc = document.createElement('span')
        courseDesc.setAttribute('class','hidden-phone');
        courseDesc.textContent = `${data[object]['CourseDesc']}`
        
        var courseLocation = document.createElement('span')
        courseLocation.setAttribute('class','experience-details')
        var courseLocationSpan1 = document.createElement('span')
        courseLocationSpan1.setAttribute('class','location')
        var courseLocationSpan2 = document.createElement('span')
        courseLocationSpan2.setAttribute('class','glyphicon glyphicon-map-marker')
        var courseLocationSpan3 = document.createElement('span')
        courseLocationSpan3.textContent = `${data[object]['CourseLocation']}`
        courseLocationSpan2.appendChild(courseLocationSpan3)
        courseLocationSpan1.appendChild(courseLocationSpan2)
        courseLocation.appendChild(courseLocationSpan1)

        courseInfo.appendChild(courseName)
        courseInfo.appendChild(courseDesc)
        courseInfo.appendChild(courseLocation)
        courseDiv.appendChild(courseInfo)

        topDiv.appendChild(universityDiv)
        topDiv.appendChild(courseDiv)

        var educationExperience = document.getElementById('education-experience')
        educationExperience.appendChild(topDiv)
        return object
    }
    return data
}