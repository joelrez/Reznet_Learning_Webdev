from django import forms

class serviceform(forms.Form):
    nameText = forms.CharField(label='Name(First - Last):', max_length = '1000')
    serviceText = forms.CharField(label='What kind of service would you like done?:', max_length = '1000')
    emailText = forms.CharField(label='Email:', max_length = '1000')
    skypeText = forms.CharField(label='Skype:', max_length = '1000')
    discordText = forms.CharField(label='Discord:', max_length = '1000')
    inquiryText = forms.CharField(label='How did you learn about my services:', max_length = '1000')
    