from django.conf.urls import url
from . import views
#from django.contrib.auth.views import login

urlpatterns = [
    url(r'^$',views.student,name='student'),
    # url(r'^$',login,{'template_name':'student/studentlogin.html'}),
    url(r'^signup$',views.studentSignup,name='studentsignup'),
    url(r'^test$',views.test,name='test'),



];
