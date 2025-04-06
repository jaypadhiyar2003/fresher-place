<x-layout>
    <x-page-heading>New Job</x-page-heading>

    <x-forms.form method="POST" action="/jobs">
        <x-forms.input label="Title *" name="title" placeholder="Admin Executive"/>
        <x-forms.input label="Salary *" name="salary" placeholder="$100,000 USD"/>
        <x-forms.input label="Location *" name="location" placeholder="APC Chhatralay,Anand,Gujarat"/>

        <x-forms.select label="Schedule *" name="schedule">
            <option>Part Time</option>
            <option>Full Time</option>
        </x-forms.select>

        <x-forms.input label="URL *" name="url" placeholder="https://www.bapscharities.org/india/apc-vidyanagar/"/>

        <x-forms.divider/>

        <x-forms.input label="Tags (comma separated)" name="tags" placeholder="APC,HOME,vvn"/>
        <x-forms.checkboxdefault label="check here if you want to featured this Job  " name="featured" />

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>
</x-layout>
