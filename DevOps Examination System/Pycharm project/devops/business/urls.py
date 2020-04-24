from django.conf.urls import url
from . import views
#from django.contrib.auth.views import login

urlpatterns = [
    url(r'^$',views.business,name='business'),
    url(r'^signup$',views.businessSignup,name='businessSignup'),
    #url(r'^$',login,{'template_name':'business/businesslogin.html'}),
    #url(r'^signup$',login,{'template_name':'business/businesssignup.html'}),

];
