<div>
    <div class="d-flex align-items-center justify-content-between mb-5">
        <h3 class="text-dark fw-bold mb-0">Tambah Task Baru</h3>
        <a href="{{ route('task') }}" class="btn btn-secondary btn-sm">Kembali</a>
    </div>
    <div class="card mb-2">
        <div class="card-body">
            <form wire:submit="save">
                <div class="mb-3">
                    <label for="title" class="mb-1">Nama Task</label>
                    <input wire:model="title"type="text" id="title" class="form-control" placeholder="Tulis nama task">
                    <div>
                        @error('title') <span class="text-danger">{{ $message }}</span> @enderror 
                    </div>
                </div>
                <div class="mb-3">
                    <label for="priority" class="mb-1">Prioritas</label>
                    <select wire:model="priority" id="priority" class="form-select">
                        <option value="">Pilih prioritas</option>
                        <option value="low">Low</option>
                        <option value="medium">Medium</option>
                        <option value="higty">High</option>
                        <option value="urgent">Urgent</option>
                    </select>
                    <div>
                        @error('priority') <span class="text-danger">{{ $message }}</span> @enderror 
                    </div>
                </div>
                <button class="btn btn-primary w-100" type="submit">Buat</button>
            </form>
        </div>
    </div>
</div>