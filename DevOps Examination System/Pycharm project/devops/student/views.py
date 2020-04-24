from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.

ip="10.244.1.2:8765"
def student(request):
    return render(request,'student/studentlogin.html')

def studentSignup(request):
    return render(request,'student/studentsignup.html')

def test(request):
    return render(request,'student/test.html',{"ip":ip})



