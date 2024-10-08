<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8" />
	<script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
	<!-- class="mx-auto my-2 max-w-3xl p-2" -->
	<div>
		<!-- Company logo -->
		<img src="{{ public_path('/images/logo.png') }}" alt="Logo" class="mx-auto mb-2 h-10 w-10 object-cover" />

		<!-- Company header -->
		<p class="text-center text-sm font-medium text-[#086A38]">OCC Weavers Ltd.</p>
		<p class="mb-4 text-center text-xs text-[#086A38]">7081 Al-Madinah Al-Munawarah Rd, Ash Sharafiyah District, Jeddah 23216, Saudi Arabia</p>

		<!-- Employee information header -->
		<div class="mb-5 flex items-center justify-between rounded-md bg-[#086A38] p-2 text-white">
			<p class="w-40 text-left text-xs font-light ml-2">{{ \Carbon\Carbon::now()->format('l, F j, Y') }}</p>
			<h1 class="w-52 text-center text-sm font-medium">Employee Information</h1>
			<p class="w-40 text-right text-xs font-light mr-2">{{ $employee->country->name }}</p>
		</div>

		<!-- Employee photo -->
		<div class="col-span-1 mx-auto mb-5 h-40 w-32">
			@if ($employee->photo_link)
			<img src="{{ $employee->photo_link }}" alt="Employee Photo" class="h-full w-full rounded-md object-cover" />
			@else
			<img src="https://placehold.co/40x60" alt="Employee Photo" class="h-full w-full rounded-md object-cover" />
			@endif
		</div>

		<!-- Employee information -->
		<div class="mb-2 grid grid-cols-5 gap-2">
			<div class="col-span-3">
				<label class="mb-2 block text-xs font-medium text-zinc-600">Name</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black font-bold">{{ $employee->full_name }}</p>
			</div>
			<div class="col-span-2">
				<label class="mb-2 block text-xs font-medium text-[#086A38]">Employee no.</label>
				<p class="block w-full border-b border-[#0e9c53] bg-[#f0f7f2] p-2.5 text-sm text-[#086A38] font-bold">{{ $employee->employee_number }}</p>
			</div>
		</div>
		<div class="mb-2 grid grid-cols-2 gap-2">
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">Employee classification</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->employeeJob->job_title ?? '-' }}</p>
			</div>
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">Project site</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->project->project_name ?? '-' }}</p>
			</div>
		</div>
		<div class="mb-2 grid grid-cols-2 gap-2">
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">Email address</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->email ?? '-' }}</p>
			</div>
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">Mobile no.</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->mobile_number ?? '-' }}</p>
			</div>
		</div>
		<div class="mb-2 grid grid-cols-3 gap-2">
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">IQAMA no.</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->iqama_number }}</p>
			</div>
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">IQAMA expiration (Hijri)</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->iqama_expiration_hijri }}</p>
			</div>
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">IQAMA expiration (Gregorian)</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->iqama_expiration_gregorian->format('Y-m-d') }}</p>
			</div>
		</div>
		<div class="mb-2 grid grid-cols-2 gap-2">
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">Passport no.</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->passport_number }}</p>
			</div>
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">Passport expiration</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->passport_expiration->format('Y-m-d') }}</p>
			</div>
		</div>
		<div class="mb-2 grid grid-cols-3 gap-2">
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">Employment start</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->company_start_date->format('Y-m-d') }}</p>
			</div>
			<div class="grid grid-cols-4 gap-2">
				<div class="col-span-3">
					<label class="mb-2 block text-xs font-medium text-zinc-600">Birthdate</label>
					<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->birthdate->format('Y-m-d') }}</p>
				</div>
				<div>
					<label class="mb-2 block text-xs font-medium text-zinc-600">Age</label>
					<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->age }}</p>
				</div>
			</div>
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">Insurance</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->insuranceClass->name  }}</p>
			</div>
		</div>
		<div class="mb-2 grid grid-cols-2 gap-2">
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">Education level</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->educationLevel->level }}</p>
			</div>
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">Degree (if applicable)</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->degree->degree ?? '-' }}</p>
			</div>
		</div>
		<div class="mb-2 grid grid-cols-2 gap-2">
			<div>
				<label class="mb-2 block text-xs font-medium text-zinc-600">IBAN no.</label>
				<p class="block w-full border-b border-gray-300 bg-gray-50 p-2.5 text-sm text-black">{{ $employee->iban_number }}</p>
			</div>
		</div>
	</div>

	@pageBreak

	<!-- Contract history header -->
	<div class="mb-5 flex rounded-md bg-[#086A38] p-2 text-white">
		<h1 class="mx-auto text-center text-sm font-medium">Contract history</h1>
	</div>

	<!-- Contract history table -->
	<table class="mt-5 w-full mb-5">
		<thead>
			<tr class="bg-[#f0f7f2] text-[#086A38]">
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">Date</th>
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">Duration</th>
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">Job title</th>
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">Basic salary</th>
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">Allowances</th>
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">Remarks</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($employee->contracts->sortByDesc('start_date') as $contract)
			<tr class="border-b border-gray-300">
				<td class="px-2 py-2 text-xs text-black">
					<span class="text-[10px] font-bold text-zinc-400">Electronic contract start:</span><br /> {{ $contract->start_date->format('Y-m-d')}}<br />
					<span class="text-[10px] font-bold text-zinc-400">Electronic contract end:</span><br /> {{ $contract->end_date->format('Y-m-d')}}<br />
					<span class="text-[10px] font-bold text-zinc-400">Paper contract end:</span><br /> {{ $contract->paper_contract_end_date ? $contract->paper_contract_end_date->format('Y-m-d') : '-' }}<br />
				</td>
				<td class="px-2 py-2 text-xs font-bold text-black">{{ $contract->duration_string }}</td>
				<td class="px-2 py-2 text-xs text-black">{{ $contract->employeeJob->job_title }}</td>
				<td class="px-2 py-2 text-xs text-black">{{ $contract->basic_salary }} <span class="text-[#086A38] font-medium text-[9px]">SAR</span></td>
				<td class="px-2 py-2 text-xs text-black">
					<span class="text-[10px] font-bold text-zinc-400">Housing:</span><br /> {{ $contract->housing_allowance ?? '-' }} <span class="text-[#086A38] font-medium text-[9px]">SAR</span><br />
					<span class="text-[10px] font-bold text-zinc-400">Transportation:</span><br /> {{ $contract->transportation_allowance ?? '-' }} <span class="text-[#086A38] font-medium text-[9px]">SAR</span><br />
					<span class="text-[10px] font-bold text-zinc-400">Food:</span><br /> {{ $contract->food_allowance ?? '-' }} <span class="text-[#086A38] font-medium text-[9px]">SAR</span>
				</td>
				<td class="w-40 px-2 py-2 text-xs text-black">{{ $contract->remarks ?? '-' }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<!-- @pageBreak -->

	<!-- Transfer history header -->
	<div class="mb-5 flex rounded-md bg-[#086A38] p-2 text-white">
		<h1 class="mx-auto text-center text-sm font-medium">Transfer history</h1>
	</div>

	<!-- Transfer history table -->
	<table class="w-full mt-5 mb-5">
		<thead>
			<tr class="bg-[#f0f7f2] text-[#086A38]">
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">Transfer date</th>
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">From</th>
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">To</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($employee->projectAssignments->sortByDesc('transfer_date') as $projectAssignment)
			<tr class="border-b border-gray-300">
				<td class="px-2 py-2 text-xs text-black">{{ $projectAssignment->transfer_date->format('Y-m-d') }}</td>
				<td class="px-2 py-2 text-xs text-black">{{ $projectAssignment->from_project ? $projectAssignment->from_project->project_name : '-'}}</td>
				<td class="px-2 py-2 text-xs text-black font-bold">{{ $projectAssignment->project->project_name }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

	<!-- @pageBreak -->

	<!-- Leave history header -->
	<div class="mb-5 flex rounded-md bg-[#086A38] p-2 text-white">
		<h1 class="mx-auto text-center text-sm font-medium">Leave history</h1>
	</div>

	<!-- Leave history table -->
	<table class="w-full mt-5">
		<thead>
			<tr class="bg-[#f0f7f2] text-[#086A38]">
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">Date</th>
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">Visa expiration</th>
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">Duration</th>
				<th class="border-separate border-b border-[#086A38] px-2 py-2 text-start text-xs font-medium">Remaining leave</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($employee->leaves->sortByDesc('start_date') as $leave)
			<tr class="border-b border-gray-300">
				<td class="px-2 py-2 text-xs text-black">
					<span class="text-[10px] font-bold text-zinc-400">Departure:</span><br /> {{ $leave->start_date->format('Y-m-d') }}<br />
					<span class="text-[10px] font-bold text-zinc-400">Return:</span><br /> {{ $leave->end_date->format('Y-m-d') }}<br />
				</td>
				<td class="px-2 py-2 text-xs text-black">{{ $leave->visa_expiration->format('Y-m-d') }}</td>
				<td class="px-2 py-2 text-xs text-black font-bold">{{ $leave->duration_in_days . Illuminate\Support\Pluralizer::plural(' day', $leave->duration_in_days) }}</td>
				<td class="px-2 py-2 text-xs text-black">{{ $leave->remaining_leave_days . Illuminate\Support\Pluralizer::plural(' day', $leave->remaining_leave_days) }}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>

</html>