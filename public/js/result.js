var subjectObject = {
    "Level-1 Term-1": {
      "Theory": ["CSE 1101", "CSE 1201", "CSE 1203", "MATH 1141", "PHY 1103","EEE 1163","ME 1181"],
      "Sessional": ["CSE 1100", "CSE 1102", "PHY 1104","EEE 1164"],
    },
    "Level-1 Term-1":{
      "Theory": ["CSE 1201", "CSE 1203", "HUM 1201", "MATH 1203", "EEE 1269"],
      "Sessional": ["CSE 1204", "HUM 1202", "EEE 1270", "ME 1250"]
    },
    "Level-2 Term-1": {
      "Theory": ["CSE 2101", "CSE 2103", "CSE 2105", "CHEM 2101", "MATH 2103"],
      "Sessional": ["2102", "CSE 2104", "CSE 2106", "CSE 2108"]
    },
    "Level-2 Term-2":{
      "Theory": ["CSE 2201", "CSE 2203", "CSE 2205", "MATH 2203","EEE 2269"],
      "Sessional": ["CSE 2200", "CSE 2202", "CSE 2206","EEE 2270"],
    },
    "Level-3 Term-1":{
      "Theory": ["CSE 3101", "CSE 3103", "CSE 3105", "CSE 3107","CSE 3109"],
      "Sessional": ["CSE 3100","CSE 3102", "CSE 3104", "CSE 3110","CSE 3112"],      
    },
    "Level-3 Term-2":{
      "Theory": ["CSE 3201", "CSE 3203", "CSE 3205", "CSE 3207","CSE 3209"],
      "Sessional": ["CSE 3200","CSE 3202","CSE 3204", "CSE 3206", "CSE 3210"],
    },
    "Level-4 Term-1":{
      "Theory":  ["CSE 4101", "CSE 4103", "CSE 4105","CSE 4107","CSE 4109"],
      "Sessional": ["CSE 4000","CSE 4102","CSE 4104","CSE 3208"],
    },
    "Level-4 Term-2":{
      "Theory":  ["CSE 42011", "CSE 4213", "CSE 4215"],
      "Sessional": ["CSE 4000","CSE 4212","CSE 4216"],
    }
  }
  window.onload = function() {
    var levelTermSel = document.getElementById("levelTerm");
    var courseTypeSel = document.getElementById("courseType");
    var courseSel = document.getElementById("course");
    var courseSel1 = document.getElementById("course1");
    var courseSel2 = document.getElementById("course2");
    var courseSel3 = document.getElementById("course3");
    var courseSel4 = document.getElementById("course4");

    // For showing subject value
    for (var x in subjectObject) {
      levelTermSel.options[levelTermSel.options.length] = new Option(x);
    }

    // For showing topic value
    levelTermSel.onchange = function() {
        courseSel.length = 1;
        courseTypeSel.length = 1;

        for (var y in subjectObject[this.value]) {
        courseTypeSel.options[courseTypeSel.options.length] = new Option(y);
      }
    }
    // For showing chapter value
    courseTypeSel.onchange = function() {
        courseSel.length = 1;
      var z = subjectObject[levelTermSel.value][this.value];
      for (var i = 0; i < z.length; i++) {
        courseSel.options[i] = new Option(z[i], z[i]);
        courseSel1.options[i] = new Option(z[i], z[i]);
        courseSel2.options[i] = new Option(z[i], z[i]);
        courseSel3.options[i] = new Option(z[i], z[i]);
        courseSel4.options[i] = new Option(z[i], z[i]);

      }
    }
  }