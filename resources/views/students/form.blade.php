<label for="studentname">Student Name:</label>
<input id="studentname" class="form-control mb-2" type="text" name="student_name" placeholder="Student Name" value="{{ old('student_name') ?? $student->student_name }}">
<div>{{ $errors->first('student_name') }}</div>
<label for="roll">Roll:</label>
<input id="roll" class="form-control mb-2" type="text" name="roll" placeholder="Roll" value="{{ old('roll') ?? $student->roll }}">
<div>{{ $errors->first('roll') }}</div>
<label for="classname">Class Name:</label>
<input id="classname" class="form-control mb-2" type="text" name="class" placeholder="Class Name" value="{{ old('class') ?? $student->class }}">
<div>{{ $errors->first('class') }}</div>
<label for="status">Status: </label>
<select name="status" id="status" class="form-control mb-2">
    <option value="1">Active</option>
    <option value="0">Inactive</option>
</select>
<label for="academy_id">Add Academy:</label>
<select name="academy_id" id="academy_id" class="form-control mb-2">
    @foreach ($academy as $item)
        <option value="{{ $item->id }}">{{ $item->name }}</option>
    @endforeach
</select>

@csrf