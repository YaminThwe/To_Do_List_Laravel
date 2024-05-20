<!DOCTYPE html>
<html>

<head>
    <title>Dashboard</title>
    <!-- Include the Tailwind CSS stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">

    <!-- Include the Tailwind CSS stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">

        <div class="row">
            <form action="{{ route('store') }}" method="POST" class="form-input">
                @csrf
                <div class="col-md-4">
                    <label for="by" class="block text-gray-700 text-lg font-bold mb-2">By:</label>
                    <select name="By" id="by" class="form-control">
                        @foreach($users as $user)
                            <option value="{{ $user->name }}">{{ $user->name }}</option>
                        @endforeach
                    </select>

                    <br>

                    <label for="to" class="block text-gray-700 text-lg font-bold mb-2">To:</label>
                    <select name="To" id="to" class="form-control">
                        @foreach($users as $user)
                            <option value="{{ $user->name }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="taskName" class="block text-gray-700 text-lg font-bold mb-2">Task Name:</label>
                    <input type="text" name="TaskName" id="taskName" class="form-control">
                </div>

                <div class="col-md-4">
                    <label for="deadline" class="block text-gray-700 text-lg font-bold mb-2">Deadline:</label>
                    <input type="text" name="Deadline" id="deadline" class="form-control">
                </div>


                <div class="col-md-12" style="margin-top:20px;">
                    <button type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Task</button>
                </div>
            </form>
        </div>
    </div>

    <div class="container mx-auto">
        <h1 class="text-2xl font-bold my-4">To-Do List Dashboard</h1>


        <table class="table-auto w-full border-collapse border border-gray-800">
            <thead>
                <tr>
                    <th class="px-4 py-2 bg-gray-200 text-gray-800 border border-gray-600">ID</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-800 border border-gray-600">By</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-800 border border-gray-600">Task Name</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-800 border border-gray-600">To</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-800 border border-gray-600">Deadline</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-800 border border-gray-600">Created At</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-800 border border-gray-600">Updated At</th>
                    <th class="px-4 py-2 bg-gray-200 text-gray-800 border border-gray-600"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($todolists as $toDoList)
                    <tr>
                        <td class="px-4 py-2 border border-gray-600">{{ $toDoList->id }}</td>
                        <td class="px-4 py-2 border border-gray-600">{{ $toDoList->By }}</td>
                        <td class="px-4 py-2 border border-gray-600">{{ $toDoList->TaskName }}</td>
                        <td class="px-4 py-2 border border-gray-600">{{ $toDoList->To }}</td>
                        <td class="px-4 py-2 border border-gray-600">{{ $toDoList->Deadline }}</td>
                        <td class="px-4 py-2 border border-gray-600">{{ $toDoList->created_at }}</td>
                        <td class="px-4 py-2 border border-gray-600">{{ $toDoList->updated_at }}</td>
                        <td class="px-4 py-2 border border-gray-600">
                            <form action="{{ route('destroy', $toDoList->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-link btn-sm float-end"
                                    style="border: none; background: none; padding: 0;">
                                    <i class="fas fa-trash" style="color: red;"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <script>
        // Initialize Flatpickr
        flatpickr("#deadline", {
            enableTime: false, // Disable time selection
            dateFormat: "Y-m-d", // Format the date
        });
    </script>
</body>

</html>